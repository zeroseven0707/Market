<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view($merchant_id){
        $http = new \GuzzleHttp\Client();
        $url = 'https://api.upos-conn.com/auth/v1/PosUser/'.$merchant_id;
        $response = $http->get($url);
        $result = json_decode((string) $response->getBody(), true);
        dd($result);
}
}
