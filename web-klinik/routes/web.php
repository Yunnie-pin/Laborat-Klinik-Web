<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListBidangController;
use App\Http\Controllers\ListPasienController;
use App\Http\Controllers\ListUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RiwayatPemeriksaanController;

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
    return view('welcome');
});

Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);

Route::post('/logout', [LogoutController::class,'logout']);


Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::get('/riwayat-pemeriksaan', [RiwayatPemeriksaanController::class, 'index']);

//Super Admin
Route::get('/list-user', [ListUserController::class, 'index']);
Route::get('/list-bidang', [ListBidangController::class, 'index']);

//Administrasi
Route::get('/list-pasien', [ListPasienController::class, 'index']);


Route::get('/cekking', function () {
    return view('login');
});