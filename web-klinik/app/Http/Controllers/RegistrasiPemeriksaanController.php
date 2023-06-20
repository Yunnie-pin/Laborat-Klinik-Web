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
            'datapasien' => $datapasien
        ]);
    }



    public function store(Request $request)
    {
        $rules = [
            'pasien_id'     => 'required',
            'status_id'     => 'required',
            'keterangan'    => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return new PostResource(false, $validator->errors()->all());
        }
        $pasien = Pasien::where('id', $request->pasien_id)->first();
        if (!$pasien) {
            return new PostResource(false, "Pasien tidak ditemukan");
        }
        $status = Status::where('id', $request->status_id)->first();
        if (!$status) {
            return new PostResource(false, "Status tidak ditemukan");
        }
        
        if (!is_array($request->keterangan) && $request->keterangan != null) {
            return new PostResource(false, "Keterangan not in a List");
        }
        $data = [
            'user_id' => $request->user()->id,
            'pasien_id' => $request->pasien_id,
            'status_id' => $request->status_id,
        ];
        $pemeriksaan = Pemeriksaan::create($data);

        if ($request->keterangan) {
            try {
                foreach ($request->keterangan as $keterangan) {
                    $keterangan['pemeriksaan_id'] = $pemeriksaan->id;
                    Keterangan::create($keterangan);
                }
            } catch (\Throwable $th) {
                $pemeriksaan->delete();
                return new PostResource(false, "Cek Kembali List Keterangan Pemeriksaan");
            }
        }
        
        return redirect('/dashboard')->with('success', 'Pemeriksaan telah berhasil ditambahkan');
    }

    


}
