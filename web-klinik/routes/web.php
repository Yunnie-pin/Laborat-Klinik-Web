<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListBidangController;
use App\Http\Controllers\ListMetodeController;
use App\Http\Controllers\ListParameterController;
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

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate'])->name('login');

Route::post('/logout', [LogoutController::class,'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');

Route::get('/riwayat-pemeriksaan', [RiwayatPemeriksaanController::class, 'index'])->name('riwayat-pemeriksaan');

//Super Admin
Route::resource('/list-user', ListUserController::class)->names([
    'index' => 'list-user'
]);;

Route::resource('/list-bidang', ListBidangController::class)->names([
    'index' => 'list-bidang',
    'create' => 'create-bidang',
    'store' => 'store-bidang'
]);

Route::resource('/list-metode', ListMetodeController::class)->names([
    'index' => 'list-metode'
]);

Route::resource('/list-parameter', ListParameterController::class)->names([
    'index' => 'list-parameter'
]);


//Administrasi
Route::get('/list-pasien', [ListPasienController::class, 'index'])->name('list-pasien');


// Route::get('/cekking', function () {
//     return view('login');
// });