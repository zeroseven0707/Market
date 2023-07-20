<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CallbackController extends Controller
{
    public function callback($id,Request $request){
        $http = new \GuzzleHttp\Client();

        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512",$request->order_id.$request->status_code.$request->gross_amount,$serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == "capture" or $request->transaction_status == "settlement") {

                // get transaksi
                // $get_transaksi = "https://api.upos-conn.com/master/v1/GetTransaksi/".$request->order_id;
                // $respon = $http->post($get_transaksi);
                // $data['transaksi'] = json_decode((string)$respon->getBody(), true);


                $merchant_code = Merchant::all();
                $json = json_decode($merchant_code);
                $data_merchant = $json[0]->merchant_code;
                $code_transaksi = "INV-".Carbon::now()->format('d-m-y')."-".uniqid();
                $url = "https://api.upos-conn.com/master/v1/PosTransaksi/".$request->order_id;
                $response = $http->post($url,[
                    'form_params'=>[
                        'posMerchantId'=>$data_merchant,
                        'posKodeTransaksi'=>$code_transaksi,
                        'posCustomerId'=>61,
                        'posTanggalTransaksi'=>Carbon::now()->format('d-m-y'),
                        'posTipeTransaksi'=>0,
                        'posTotalPembayaran'=>$request->gross_amount,
                        'posKasirId'=>0,
                        'posStatus'=>'success'
                    ]
                ]);
                $data['transaksi'] = json_decode((string)$response->getBody(), true);
            }
        }
    }
}
