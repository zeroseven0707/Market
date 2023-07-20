<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class RafliController extends Controller
{
    public function remove_allcart(){
        $cart = session()->get('cart');
        unset($cart);
        session()->put('cart',[]);
        return redirect()->back();
}
public function remove_cart($index){
        $cart = session()->get('cart');
        unset($cart[$index]);
        session()->put('cart',$cart);
        return redirect()->back();
}
public function remove_wishlist($index){
    $wishlist = session()->get('wishlist');
    unset($wishlist[$index]);
    session()->put('wishlist',$wishlist);
    return redirect()->back();
}
    public function addto($id, Request $request){
        $http = new \GuzzleHttp\Client;
        $merchant_code = Merchant::all();
        $json = json_decode($merchant_code);
        $data_merchant = $json[0]->merchant_code;
        $product_url = 'https://api.upos-conn.com/master/v1/produk/'.$id;
        $response = $http->get($product_url);
        $data['product'] = json_decode((string)$response->getBody(), true);
        if($request->save == "cart"){
           $cart = session()->get('cart',[]);
            $cart[] =[
                'product_id'=>$id,
                'gambar' => $data['product']['data'][0]['gambar'],
                'nama' => $data['product']['data'][0]['namaVarian'],
                'harga' => $data['product']['data'][0]['hargaJual'],
                'harga_dasar' => $data['product']['data'][0]['hargaDasar'],
                'berat' => $data['product']['data'][0]['berat'],
                'total' => ($data['product']['data'][0]['hargaJual']*$request->qty),
                'qty' => $request->qty,
            ];
            session()->put('cart',$cart);
            session()->save();
            return redirect('cart');
        }else if($request->save == "wishlist"){
           $wishlist = session()->get('wishlist',[]);
            $wishlist[] =[
                'product_id'=>$id,
                'gambar' => $data['product']['data'][0]['gambar'],
                'nama' => $data['product']['data'][0]['namaVarian'],
                'harga' => $data['product']['data'][0]['hargaJual'],
                'harga_dasar' => $data['product']['data'][0]['hargaDasar'],
                'berat' => $data['product']['data'][0]['berat'],
                'total' => ($data['product']['data'][0]['hargaJual']*$request->qty),
                'qty' => $request->qty,
            ];
            session()->put('wishlist',$wishlist);
            session()->save();
            return redirect('wishlist');
        }
    }
    public function cartwishlist($id, Request $request){
        $http = new \GuzzleHttp\Client;
        $merchant_code = Merchant::all();
        $json = json_decode($merchant_code);
        $data_merchant = $json[0]->merchant_code;
        $product_url = 'https://api.upos-conn.com/master/v1/produk/'.$id;
        $response = $http->get($product_url);
        $data['product'] = json_decode((string)$response->getBody(), true);
           $cart = session()->get('cart',[]);
            $cart[] =[
                'product_id'=>$id,
                'gambar' => $data['product']['data'][0]['gambar'],
                'nama' => $data['product']['data'][0]['namaVarian'],
                'harga' => $data['product']['data'][0]['hargaJual'],
                'harga_dasar' => $data['product']['data'][0]['hargaDasar'],
                'berat' => $data['product']['data'][0]['berat'],
                'total' => ($data['product']['data'][0]['hargaJual']*1),
                'qty' => '1',
            ];
            session()->put('cart',$cart);
            session()->save();
            return redirect('cart');
    }
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('sign-up');
    }
    public function tentang(){
        return view('tentang-kami');
    }
    public function produk($id){
        $http = new \GuzzleHttp\Client;
        // Get All Product
        $merchant_code = Merchant::all();
        $json = json_decode($merchant_code);
        $data_merchant = $json[0]->merchant_code;
        $product_url = 'https://api.upos-conn.com/master/v1/produk/'.$id;
        $category_url = 'https://api.upos-conn.com/master/v1/posProduk/'.$data_merchant;
        $response = $http->get($product_url);
        $product_all = $http->get($category_url);
        $data['product'] = json_decode((string)$response->getBody(), true);
        $data['product_all'] = json_decode((string)$product_all->getBody(), true);
        // dd($data['product']['data']);
        return view('produk',['product' => $data['product']['data'][0], 'product_all' => $data['product_all']['data']]);
    }
    public function cart(){
        return view('cart');
    }
    public function informasi(){
        $http = new \GuzzleHttp\Client;
        $kota = $http->get('https://api.rajaongkir.com/starter/city',[
            'headers' => [
                'key' => '6b69e8eec2fcb0f60490f9d8051ecefd'
            ]
        ]);
        $prov = $http->get('https://api.rajaongkir.com/starter/province',[
            'headers' => [
                'key' => '6b69e8eec2fcb0f60490f9d8051ecefd'
            ]
        ]);
        $result = json_decode((string)$kota->getBody(), true);
        $prov = json_decode((string)$prov->getBody(), true);
        $data['city'] = $result['rajaongkir']['results'];
        $data['prov'] = $prov['rajaongkir']['results'];
        // $data['cart'] = collect($session)->where('user_id', '=', user()['id']);
        return view('informasi')->with($data);;
    }
    public function shipping(Request $request){
        $http = new \GuzzleHttp\Client();
        $merchant_code = Merchant::all();
        $json = json_decode($merchant_code);
        $data_merchant = $json[0]->merchant_code;
        $url = 'https://api.upos-conn.com/master/v1/PosPelanggan';
        $response = $http->post($url, [
            'form_params' => [
                'posMerchantId' => $data_merchant,
                'posEmail'=>'market@gmail.com',
                'posNamaPelanggan' => $request->nama,
                'posNoHp' => $request->no_telpon,
                'posKelurahan' => $request->kelurahan,
                'posKecamatan' => $request->kecamatan,
                'posKota' => $request->kota,
                'posProvinsi' => $request->provinsi,
                'posAlamat' => $request->alamat_lengkap,
            ]
        ]);
        $user = json_decode((string)$response->getBody(), true);
        $id = $user['lastPelangganId'];
        $pelanggan = 'https://api.upos-conn.com/master/v1//PosPelanggan-getByid/'.$id;
        $response_pelanggan = $http->get($pelanggan);
        $data['get_pelanggan'] = json_decode((string)$response_pelanggan->getBody(), true);
            $berat = 0;
            $total_bayar = 0;
            $session_order = session()->get('cart');
            foreach ($session_order as $key => $value) {
                $berat += $value['berat'];
                $total_bayar += ($value['qty'] * $value['harga']);
            }
           $cost = Http::withHeaders([
                'key' => '6b69e8eec2fcb0f60490f9d8051ecefd'
            ])->post('https://api.rajaongkir.com/starter/cost',[
                'origin'=>468,
                    'destination'=>$data['get_pelanggan']['data']['kota'],
                    'weight'=>$berat,
                    'courier'=>'jne'
            ]);
            $data['ongkos'] = $cost['rajaongkir']['results'];
            // dd($data['get_pelanggan']['data']['alamat']);
            return view('/shipping')->with($data);
    }
    public function katalog(){
        return view('katalog');
    }
    public function wishlist(){
        return view('wishlist');
    }
    public function post_shipping(){


        return redirect('konfirmasi');
    }
    public function konfirmasi($id, Request $request){
        $http = new \GuzzleHttp\Client();

        $pelanggan = 'https://api.upos-conn.com/master/v1/PosPelanggan-getByid/'.$id;
        $response_pelanggan = $http->get($pelanggan);
        $data['get_pelanggan'] = json_decode((string)$response_pelanggan->getBody(), true);

        $session_order = session()->get('cart');
        $data['cart'] = $session_order;
           // Get Ongkir
           $berat = 0;
           $total_bayar = 0;
           foreach ($session_order as $key => $value) {
               $berat += $value['berat'];
               $total_bayar += ($value['qty'] * $value['harga']);
           }
          $cost = Http::withHeaders([
               'key' => '6b69e8eec2fcb0f60490f9d8051ecefd'
           ])->post('https://api.rajaongkir.com/starter/cost',[
               'origin'=>468,
                   'destination'=>$data['get_pelanggan']['data']['kota'],
                   'weight'=>$berat,
                   'courier'=>'jne'
           ]);
           $ongkos = $cost['rajaongkir']['results'];
           $raja_ongkir = [];
           foreach ($ongkos as $key => $ongkir) {
            foreach ($ongkir['costs'] as $key => $value) {
                foreach ($value['cost'] as $key => $cost) {
                    $raja_ongkir[] = [
                        'service'=>$value['service'],
                        'value'=>$cost['value'],
                        'total_bayar'=>$total_bayar
                    ];
            }
           }
        }
        $filter_ongkir = collect($raja_ongkir)->where('service', '=', $request->cost);
        foreach($filter_ongkir as $filter){
            $service = $filter['service'];
            $value = $filter['value'];
            $bayar = $filter['total_bayar'];
        }
        $posShipping = 'JNE - '.$service.' - Rp.'.$value.',00';
        $edit_pelanggan = 'https://api.upos-conn.com/master/v1/PosPelanggan/'.$id;
        $response_pelanggan = $http->put($edit_pelanggan,[
            'form_params'=>[
                'posMerchantId'=>$data['get_pelanggan']['data']['merchantId'],
                'posNamaPelanggan'=>$data['get_pelanggan']['data']['namaPelanggan'],
                'posEmail'=>'market@gmail.com',
                'posNoHp'=>$data['get_pelanggan']['data']['noHp'],
                'posAlamat'=>$data['get_pelanggan']['data']['alamat'],
                'posShiping' => $posShipping
            ]
        ]);
        $costumer = 'https://api.upos-conn.com/master/v1/PosPelanggan-getByid/'.$id;
        $response_costumer = $http->get($costumer);
        $data['costumer'] = json_decode((string)$response_costumer->getBody(), true);
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;


        // Create Transaksi
        $tbayar = $bayar+$value;
        $create_transaksi = 'https://api.upos-conn.com/master/v1/PosTransaksi';
        $code_transaksi = "INV-".Carbon::now()->format('d-m-y')."-".uniqid();
        $response_transaksi = $http->post($create_transaksi,[
            'form_params'=>[
                'posMerchantId'=>$data['get_pelanggan']['data']['merchantId'],
                'posKodeTransaksi'=>$code_transaksi,
                'posCustomerId'=>$data['get_pelanggan']['data']['posPelangganId'],
                'posTanggalTransaksi'=>Carbon::now()->format('d-m-y'),
                'posTipeTransaksi'=>0,
                'posTotalPembayaran'=>$tbayar,
                'posKasirId'=>0,
                'posStatus'=>'pending'
            ]
        ]);
        $customerDetails = [
            'name' => $data['get_pelanggan']['data']['namaPelanggan'],
            'phone' => $data['get_pelanggan']['data']['noHp'],
        ];
        $data['transaksi'] = json_decode((string)$response_transaksi->getBody(), true);
        $transaksi_id = $data['transaksi']['lastTransaksiId'];
        $params = array(
            'transaction_details' => array(
                'order_id' => $transaksi_id,
                'gross_amount' => $tbayar,
            ),
            'customer_details' => $customerDetails,
        );
        $data['snap_token'] = \Midtrans\Snap::getSnapToken($params);
        $data['cost'] = $value;
        return view('konfirmasi')->with($data);
    }
    public function kemitraan(){
        return view('gabung-mitra');
    }
}
