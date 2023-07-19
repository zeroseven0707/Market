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
Route::get('/signup',[RafliController::class, 'signup']);
Route::get('/produk',[RafliController::class, 'produk']);
Route::get('/cart',[RafliController::class, 'cart']);
Route::get('/tentang-kami',[RafliController::class, 'tentang']);
Route::get('/informasi',[RafliController::class, 'informasi']);
Route::get('/katalog',[RafliController::class, 'katalog']);
Route::get('/wishlist',[RafliController::class, 'wishlist']);
Route::get('/shipping',[RafliController::class, 'shipping']);
Route::get('/konfirmasi',[RafliController::class, 'konfirmasi']);
Route::get('/gabung-kemitraan',[RafliController::class, 'kemitraan']);




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
