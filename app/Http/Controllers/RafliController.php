<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RafliController extends Controller
{

    public function login(){
        return view('login');
    }
    public function signup(){
        return view('sign-up');
    }
    public function tentang(){
        return view('tentang-kami');
    }
    public function produk(){
        return view('produk');
    }
    public function cart(){
        return view('cart');
    }
    public function informasi(){
        return view('informasi');
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
