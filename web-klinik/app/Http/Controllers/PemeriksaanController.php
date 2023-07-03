<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Http\Requests\StorePemeriksaanRequest;
use App\Http\Requests\UpdatePemeriksaanRequest;
use App\Models\Keterangan;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function index(){
        $dataPemeriksaan = Pemeriksaan::where('status_id','1')->latest()->simplePaginate(10);
        return view('rolesviews.laborat.antreanpemeriksaan', ['dataPemeriksaan' => $dataPemeriksaan]);
    }

    public function edit($id){
        $dataPemeriksaan = Pemeriksaan::find($id);
        $dataKeterangan = Keterangan::where('pemeriksaan_id', $id)->get();
        return view('rolesviews.laborat.prosespemeriksaan', [
            'dataPemeriksaan' => $dataPemeriksaan,
            'dataKeterangan' => $dataKeterangan
        ]);
    }

    public function update(Request $request, $id){
        $dataPemeriksaan = Pemeriksaan::find($id);
        $dataPemeriksaan->update([
            'status_id' => 2
        ]);

        $keterangan = Keterangan::where('pemeriksaan_id', $id)->get();
        foreach($keterangan as $item){
            $item->update([
                'hasil' => $request->input('hasil')[$item->id],
            ]);
        }
        return redirect('/dashboard')->with('success', 'Pemeriksaan telah berhasil diperbarui');
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
