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
        //Get All Category
        $category_url = 'https://api.upos-conn.com/master/v1/PosKategoriBarang/'.$data_merchant;
        $cat = $http->get($category_url);
        //Get product by Category
        // by Makanan
        $by_makanan = 'https://api.upos-conn.com/master/v1/produkbykategori/'.$data_merchant.'/311';
        $makanan = $http->get($by_makanan);
        // Ubah data ke json
        $data['product'] = json_decode((string)$response->getBody(), true);
        $data['category'] = json_decode((string)$cat->getBody(), true);
        $data['makanan'] = json_decode((string)$makanan->getBody(), true);
        // dd($data['category']);

        return view('index')->with($data);
    }
}
