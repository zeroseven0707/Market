<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RafliController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route Khusus A Rafli
Route::get('/login',[RafliController::class, 'login']);
Route::post('/addto/{id}',[RafliController::class, 'addto']);
Route::get('/cart/{id}',[RafliController::class, 'cartwishlist']);
Route::get('/remove-cart/{index}',[RafliController::class, 'remove_cart']);
Route::get('/remove-allcart',[RafliController::class, 'remove_allcart']);
Route::get('/remove-wishlist/{index}',[RafliController::class, 'remove_wishlist']);
Route::post('/information',[RafliController::class, 'information']);

Route::get('/signup',[RafliController::class, 'signup']);
Route::get('/produk/{id}',[RafliController::class, 'produk']);
Route::get('/cart',[RafliController::class, 'cart']);
Route::get('/tentang-kami',[RafliController::class, 'tentang']);
Route::get('/informasi',[RafliController::class, 'informasi']);
Route::get('/katalog',[RafliController::class, 'katalog']);
Route::get('/wishlist',[RafliController::class, 'wishlist']);
Route::get('/shipping',[RafliController::class, 'shipping']);
Route::get('/konfirmasi',[RafliController::class, 'konfirmasi']);
Route::get('/gabung-kemitraan',[RafliController::class, 'kemitraan']);
Route::get('/cara-pembayaran',[RafliController::class, 'pembayaran']);
Route::get('/faq',[RafliController::class, 'faq']);
Route::get('/temukan-kami',[RafliController::class, 'temukanKami']);
Route::get('/kebijakan-privasi',[RafliController::class, 'kebijakanPrivasi']);
Route::get('/syarat-ketentuan',[RafliController::class, 'syaratKetentuan']);
Route::get('/cara-beli',[RafliController::class, 'caraBeli']);




// Jangan ubah apapun disini

// Halaman Utama
Route::get('/signin',[LoginController::class, 'view']);
Route::post('/signin',[LoginController::class, 'post'])->name('auth');
// Halaman Utama
Route::get('/',[HomeController::class, 'view']);
// Detail Product
Route::get('/product/{merchant_id}',[ProductController::class, 'view']);
// Detail Category
// Route::get('/',[CategoryController::class, 'view']);
