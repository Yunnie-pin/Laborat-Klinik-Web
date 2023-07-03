<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Keterangan;
use App\Models\ParameterPemeriksaan;

class CetakHasilController extends Controller
{

    public function show($id)
    {
        //
        $dataPemeriksaan = Pemeriksaan::with('keterangan')->find($id);

        return view('cetakhasil',[
            'dataPemeriksaan' => $dataPemeriksaan,
 
        ]);
    }
}