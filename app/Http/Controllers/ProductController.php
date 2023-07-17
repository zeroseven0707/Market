<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view($merchant_id){
            $http = new \GuzzleHttp\Client();
            $url = 'https://api.upos-conn.com/auth/v1/master/v1/posProduk/'.$merchant_id;
            $response = $http->get($url);
            $result = json_decode((string) $response->getBody(), true);
            dd($result);
    }
}
