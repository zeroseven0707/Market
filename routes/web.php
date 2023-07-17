<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
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

// Halaman Utama
Route::get('/login',[LoginController::class, 'view']);
Route::post('/login',[LoginController::class, 'post'])->name('auth');
// Halaman Utama
Route::get('/',[HomeController::class, 'view']);
// Detail Product
Route::get('/product/{merchant_id}',[ProductController::class, 'view']);
// Detail Category
// Route::get('/',[CategoryController::class, 'view']);
