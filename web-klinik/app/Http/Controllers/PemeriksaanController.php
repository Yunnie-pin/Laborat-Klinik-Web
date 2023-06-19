<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Http\Requests\StorePemeriksaanRequest;
use App\Http\Requests\UpdatePemeriksaanRequest;

class PemeriksaanController extends Controller
{
    public function index(){
        $dataPemeriksaan = Pemeriksaan::where('status_id','4')->get();

        return view('rolesviews.poli.reviewPemeriksaan', ['dataPemeriksaan' => $dataPemeriksaan]);
    }

}
