<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
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
                'nama' => $data['product']['data'][0]['gambar'],
                'nama' => $data['product']['data'][0]['namaVarian'],
                'harga' => $data['product']['data'][0]['hargaJual'],
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
                'nama' => $data['product']['data'][0]['gambar'],
                'nama' => $data['product']['data'][0]['namaVarian'],
                'harga' => $data['product']['data'][0]['hargaJual'],
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
                'nama' => $data['product']['data'][0]['gambar'],
                'nama' => $data['product']['data'][0]['namaVarian'],
                'harga' => $data['product']['data'][0]['hargaJual'],
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
    public function information(Request $request){
            $cart = [
                'costumer_id'=>1,
                'nama_lengkap' => $request->nama,
                'no_telpon' => $request->no_telpon,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kota' => $request->kota,
                'provinsi' => $request->provinsi,
                'alamat_lengkap' => $request->alamat_lengkap,
            ];
            session()->put('costumer',$cart);
            session()->save();

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
                    'destination'=>session()->get('costumer')['kota'],
                    'weight'=>$berat,
                    'courier'=>'jne'
            ]);
            $data['ongkos'] = $cost['rajaongkir']['results'];
            // dd($data['ongkos']);
            return view('/shipping')->with($data);
    }
    public function katalog(){
        return view('katalog');
    }
    public function wishlist(){
        return view('wishlist');
    }
    public function shipping(){
        return view('shipping');
    }
    public function konfirmasi(){
        return view('konfirmasi');
    }
    public function kemitraan(){
        return view('gabung-mitra');
    }
    public function pembayaran(){
        return view('cara-pembayaran');
    }
    public function temukanKami(){
        return view('temukan-kami');
    }
    public function faq(){
        return view('faq');
    }
    public function kebijakanPrivasi(){
        return view('kebijakan-privasi');
    }
    public function syaratKetentuan(){
        return view('syarat-ketentuan');
    }
    public function caraBeli(){
        return view('cara-beli');
    }
}
