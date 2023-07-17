<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RafliController extends Controller
{
    public function index(){
        return view('index');
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
    public function produk(){
        return view('produk');
    }
    public function cart(){
        return view('produk');
    }
}
