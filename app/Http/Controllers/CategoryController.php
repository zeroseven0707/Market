<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
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
}
