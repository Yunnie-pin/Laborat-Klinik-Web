<?php

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view(
        'dashboard',
        [
            "routes" => "dashboard",
            "user" => [
                "name" => "Windah Basudara",
                "email" => "Windahbasudara@gmail.com",
                "roles" => "Super Admin"
            ],
            "info" => [
                "pasien" => 72,
                "pemeriksaan" => [
                    "harian" => 8,
                    "bulanan" => 120,
                    "tahunan" => 200,
                ],
                "roles" => [
                    "administrasi" => 3,
                    "poli" => 6,
                    "laborat" => 10,
                ]
            ],
        ],
    );
});

Route::get('/cekking', function () {
    return view('login');
});