<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Status;
use App\Models\Keterangan;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\BidangPemeriksaan;
use App\Models\MetodePemeriksaan;
use App\Models\ParameterPemeriksaan;
use Illuminate\Support\Facades\Validator;

class RegistrasiPemeriksaanController extends Controller
{
    //
    public function index()
    {
        //
        $datapemeriksaan = Pemeriksaan::all();
        $databidang = BidangPemeriksaan::all();
        $datametode = MetodePemeriksaan::all();
        $dataparameter = ParameterPemeriksaan::all();
        $datapasien = Pasien::all();

        return view('rolesviews.poli.registrasipemeriksaan', [
            'datapemeriksaan' => $datapemeriksaan,
            'databidang' => $databidang,
            'datametode' => $datametode,
            'dataparameter' => $dataparameter,
            'datapasien' => $datapasien,
            'keterangan' => [],
        ]);
    }



    public function store(Request $request)
    {

        $validateData = $request->validate([
            'pasien_id'     => 'required',
            'user_id'     => 'required',
        ]);
        $keterangan = $request->session()->get('keterangan');

        $validateData['status_id'] = 1;
        
        if($keterangan == null){
            return redirect('/dashboard')->with('error', 'Pemeriksaan gagal ditambahkan, silahkan tambahkan keterangan');
        }

        $result = Pemeriksaan::create($validateData);

        foreach ($keterangan as $value) {
            Keterangan::create([
                'pemeriksaan_id' => $result->id,
                'bidang_id' => $value['bidang_id'],
                'metode_id' => $value['metode_id'],
                'parameter_id' => $value['parameter_id'],
            ]);
        }
        
        $request->session()->forget('requestKeterangan');
        $request->session()->forget('keterangan');
        
        return redirect('/dashboard')->with('success', 'Pemeriksaan telah berhasil ditambahkan');
    }

    public function getDataPasien($id){
        $dataPasien = Pasien::find($id);
        return response()->json($dataPasien);
    }


}
