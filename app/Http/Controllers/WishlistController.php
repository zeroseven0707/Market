<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function view(){
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
    public function post(){
        $http = new \GuzzleHttp\Client;
        $url = 'http::/';
        $response = $http->post($url,[
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token'),
                'Accept' => 'application/json'
                ]
            ]);
        $result = json_decode((string)$response->getBody(), true);
    }
}
