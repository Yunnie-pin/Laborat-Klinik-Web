<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewPemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataPemeriksaan = Pemeriksaan::where('status_id','2')->latest()->simplePaginate(10);
        return view('rolesviews.poli.listreviewpemeriksaan', ['dataPemeriksaan' => $dataPemeriksaan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $keterangan = Keterangan::where('pemeriksaan_id', $id)->get();
        foreach($keterangan as $item){
            $item->delete();
        }
        Pemeriksaan::destroy($id);
        return redirect('/review-pemeriksaan')->with('success', 'Pemeriksaan telah berhasil dihapus');
    }
}
