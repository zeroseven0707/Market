<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    // Halaman Utama
    public function view(){
        $http = new \GuzzleHttp\Client;
        // Get All Product
        $merchant_code = Merchant::all();
        $json = json_decode($merchant_code);
        $data_merchant = $json[0]->merchant_code;
        $product_url = 'https://api.upos-conn.com/master/v1/posProduk/'.$data_merchant;
        $response = $http->get($product_url);
        $data['product'] = json_decode((string)$response->getBody(), true);
        // dd($data['product']);
        return view('welcome')->with($data);
        // Get All Category
        // $category_url = 'http::/';
        // $response = $http->get($category_url,[
        //     'headers' => [
        //         'Authorization' => 'Bearer ' . session()->get('token'),
        //         'Accept' => 'application/json'
        //         ]
        //     ]);
        // $data['category'] = json_decode((string)$response->getBody(), true);

        // logged in user
        // $category_url = 'http::/';
        // $response = $http->get($category_url,[
        //     'headers' => [
        //         'Authorization' => 'Bearer ' . session()->get('token'),
        //         'Accept' => 'application/json'
        //         ]
        //     ]);
        // $data['category'] = json_decode((string)$response->getBody(), true);
    }
}
