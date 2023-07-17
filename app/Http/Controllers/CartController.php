<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        $http = new \GuzzleHttp\Client;
        $url = 'http::/';
        $response = $http->get($url,[
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token'),
                'Accept' => 'application/json'
                ]
            ]);
        $result = json_decode((string)$response->getBody(), true);
    }
}
