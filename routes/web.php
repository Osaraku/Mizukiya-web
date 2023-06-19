<?php

use App\Http\Controllers\PromoController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/reservasi', function () {
    return view('reservasi');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/promo', [PromoController::class, 'index']);

Route::get('/login', function () {
    return view('auth/login');
});