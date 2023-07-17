<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function view(){
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
