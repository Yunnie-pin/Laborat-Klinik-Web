<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Http\Requests\StorePemeriksaanRequest;
use App\Http\Requests\UpdatePemeriksaanRequest;
use App\Models\Keterangan;

class PemeriksaanController extends Controller
{
    public function index(){
        $dataPemeriksaan = Pemeriksaan::where('status_id','1')->latest()->simplePaginate(10);
        return view('rolesviews.laborat.antreanpemeriksaan', ['dataPemeriksaan' => $dataPemeriksaan]);
    }

    public function create(){
        return view('rolesviews.laborat.registrasipemeriksaan');
    }
    
    public function destroy($id){

        $keterangan = Keterangan::where('pemeriksaan_id', $id)->get();
        foreach($keterangan as $item){
            $item->delete();
        }
        
        Pemeriksaan::destroy($id);
        return redirect('/antrean-pemeriksaan')->with('success', 'Pemeriksaan telah berhasil dihapus');
    }
}
