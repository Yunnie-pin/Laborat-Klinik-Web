<?php

namespace App\Http\Controllers;

use App\Models\MetodePemeriksaan;
use Illuminate\Http\Request;

class ListMetodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $dataMetode = MetodePemeriksaan::all();

        return view('rolesviews.superadmin.listmetode', ['dataMetode' => $dataMetode]);

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
    public function show(MetodePemeriksaan $metodePemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MetodePemeriksaan $metodePemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MetodePemeriksaan $metodePemeriksaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MetodePemeriksaan $metodePemeriksaan)
    {
        //
    }
}
