<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Http\Controllers\Controller;

class CetakNotaPemeriksaan extends Controller
{
    //
    public function show($id)
    {
        //
        $dataPemeriksaan = Pemeriksaan::with('keterangan')->find($id);

        return view('cetaknota', [
            'dataPemeriksaan' => $dataPemeriksaan,

        ]);
    }
}
