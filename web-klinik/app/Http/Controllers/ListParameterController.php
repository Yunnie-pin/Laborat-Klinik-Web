<?php

namespace App\Http\Controllers;

use App\Models\BidangPemeriksaan;
use App\Models\MetodePemeriksaan;
use App\Models\ParameterPemeriksaan;
use Illuminate\Http\Request;

class ListParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataParameter = ParameterPemeriksaan::all();

        return view('rolesviews.superadmin.listparameter', ['dataParameter' => $dataParameter]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $dataBidang = BidangPemeriksaan::all();
        $dataMetode = MetodePemeriksaan::all();
        return view('rolesviews.superadmin.create.createparameter',
        ['dataBidang' => $dataBidang],
        ['dataMetode' => $dataMetode]
    );
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
    public function show(ParameterPemeriksaan $parameterPemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParameterPemeriksaan $parameterPemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ParameterPemeriksaan $parameterPemeriksaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParameterPemeriksaan $parameterPemeriksaan)
    {
        //

    }
}
