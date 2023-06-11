<?php

namespace App\Http\Controllers;

use App\Models\BidangPemeriksaan;
use Illuminate\Http\Request;

class ListBidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataBidang = BidangPemeriksaan::all();

        return view('rolesviews.superadmin.listbidang', ['dataBidang' => $dataBidang]);
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
    public function show(BidangPemeriksaan $bidangPemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BidangPemeriksaan $bidangPemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BidangPemeriksaan $bidangPemeriksaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BidangPemeriksaan $bidangPemeriksaan)
    {
        //
    }
}
