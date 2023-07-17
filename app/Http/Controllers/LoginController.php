<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    public function view(){
        return view('login');
    }
    public function post(Request $request)
    {
        $http = new \GuzzleHttp\Client();
        $url = 'https://api.upos-conn.com/auth/v1/posAuth-login';
        $response = $http->post($url, [
            'form_params' => [
                'posEmail' => $request->posEmail,
                'posPassword' => $request->posPassword,
                'posPin' => $request->posPin
            ]
        ]);
        $result = json_decode((string) $response->getBody(), true);
        // dd($result['data']);
        $merchant_code = $result['data']['posLoginId'];
        $merchant = Merchant::where('merchant_code',$merchant_code)->first();
        if ($merchant == null) {
            Merchant::create([
                'merchant_code'=>$result['data']['posLoginId']
            ]);
            return view('welcome');
        }else {
            return view('welcome');
        }
    }
}
