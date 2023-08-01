<?php

use App\Models\Pemeriksaan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CetakHasilController;
use App\Http\Controllers\CetakNotaPemeriksaan;
use App\Http\Controllers\ListBidangController;
use App\Http\Controllers\ListMetodeController;
use App\Http\Controllers\ListPasienController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\ListParameterController;
use App\Http\Controllers\HasilPemeriksaanController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\RegistrasiPemeriksaanController;
use App\Http\Controllers\ReviewPemeriksaanController;
use App\Http\Controllers\RiwayatPemeriksaanController;
use App\Http\Livewire\DynamicRegistrasiPemeriksaan;

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
    if(!auth()->check()){
        return redirect()->route('login');
    }else{
        return redirect()->route('dashboard');
    }
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate'])->name('login');

Route::post('/logout', [LogoutController::class,'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');

Route::get('/riwayat-pemeriksaan', [RiwayatPemeriksaanController::class, 'index'])->name('riwayat-pemeriksaan')->middleware('auth');
Route::get('/riwayat-pemeriksaan/{search}', [RiwayatPemeriksaanController::class, 'search'])->name('riwayat-pemeriksaan-search')->middleware('auth');

//Super Admin
Route::resource('/list-user', ListUserController::class)->names([
    'index' => 'list-user',
    'create' => 'create-user',
    'store' => 'store-user'
])->middleware('superadmin');

Route::get('/list-user-search', [ListUserController::class, 'search'])->name('search-user')->middleware('superadmin');

Route::resource('/profile', ProfileUserController::class)->names([
    'index' => 'profile',
    'update' => 'update-profile'
])->except(['create', 'destroy', 'edit', 'store']) ->middleware('auth');

Route::get('/change-password', [ProfileUserController::class, 'changePassword'])->name('change-password')->middleware('auth');
Route::post('/change-password', [ProfileUserController::class, 'updatePassword'])->name('update-password')->middleware('auth');

Route::resource('/list-bidang', ListBidangController::class)->names([
    'index' => 'list-bidang',
    'create' => 'create-bidang',
    'store' => 'store-bidang',
])->middleware('superadmin');

Route::resource('/list-metode', ListMetodeController::class)->names([
    'index' => 'list-metode',
    'create' => 'create-metode',
    'store' => 'store-metode'
])->middleware('superadmin');

Route::resource('/list-parameter', ListParameterController::class)->names([
    'index' => 'list-parameter',
    'create' => 'create-parameter',
])->middleware('superadmin');

//Administrasi
Route::resource('/list-pasien', ListPasienController::class)->names([
    'index' => 'list-pasien',
    'create' => 'create-pasien',
])->middleware('administrasi');

Route::get('/list-pasien-search', [ListPasienController::class, 'search'])->name('search-pasien')->middleware('administrasi');

Route::resource('/hasil-pemeriksaan', HasilPemeriksaanController::class)->names([
    'index' => 'hasil-pemeriksaan'
])->middleware('administrasi');

Route::get('/cetak-hasil/{id}', [CetakHasilController::class, 'show'])->name('cetak-hasil')->middleware('administrasi');
Route::get('/cetak-nota/{id}', [CetakNotaPemeriksaan::class, 'show'])->name('cetak-nota')->middleware('administrasi');


//Poli
Route::resource('/registrasi-pemeriksaan', RegistrasiPemeriksaanController::class)->names([
    'index' => 'registrasi-pemeriksaan',
    'store' => 'store-pemeriksaan'
])->middleware('poli');

Route::resource('/review-pemeriksaan', ReviewPemeriksaanController::class)->names([
    'index' => 'review-pemeriksaan',
])->middleware('poli');

Route::get('/dynamic-registrasi-pemeriksaan', DynamicRegistrasiPemeriksaan::class)->name('dynamic-registrasi-pemeriksaan')->middleware('poli');

//Laborat
Route::resource('/antrean-pemeriksaan', PemeriksaanController::class)->names([
    'index' => 'list-antrean-pemeriksaan',
    'show' => 'show-antrean-pemeriksaan',
])->middleware('laborat');

Route::get('/getDataPasien/{id}', [RegistrasiPemeriksaanController::class, 'getDataPasien'])->middleware('laborat');

