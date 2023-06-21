<?php

use App\Http\Controllers\PromoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StaffController;
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

Route::resource('/menu', MenuController::class);

Route::resource('/reservasi', ReservasiController::class);

Route::resource('/kontak', KontakController::class);

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/promo', [PromoController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/admin/dashboard', StaffController::class);
Route::resource('/admin/reservasi', ReservasiController::class);
Route::resource('/admin/menu', MenuController::class);
Route::resource('/admin/promo', PromoController::class);
Route::resource('/admin/pesan', KontakController::class);