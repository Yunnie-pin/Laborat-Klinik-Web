<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class ListPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datapasien = Pasien::all();

        return view('rolesviews.administrasi.listpasien', ['datapasien' => $datapasien]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rolesviews.administrasi.create.createpasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_identitas' => 'required',
            'jenis_kelamin' => 'required',
            'no_identitas' => 'required',
            'no_telp' => 'required',
            'bpjs' => 'required',
            'alamat' => 'required|max:160'
        ]);

        Pasien::create($validateData);

        return redirect('/list-pasien')->with('success', 'Pasien telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($pasien)
    {
        //
        $data = Pasien::find($pasien);
        return view('rolesviews.administrasi.edit.editpasien',
        [
            'pasien' => $data,
        ]
    );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $pasien)
    {
        //
        $validateData = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_identitas' => 'required',
            'jenis_kelamin' => 'required',
            'no_identitas' => 'required',
            'no_telp' => 'required',
            'bpjs' => 'required',
            'alamat' => 'required|max:160'
        ]);


        Pasien::where('id', $pasien )->update($validateData);

        return redirect('/list-pasien')->with('success','Data Pasien telah berhasil diperbaharui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pasien)
    {
        //
        Pasien::destroy($pasien);


        return redirect('/list-pasien')->with('success', 'Pasien telah berhasil dihapus');
    }
}
