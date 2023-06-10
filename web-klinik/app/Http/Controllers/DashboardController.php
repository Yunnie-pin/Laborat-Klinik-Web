<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view(
            'dashboard',
            [
                "routes" => "dashboard",
                "info" => [
                    "pasien" => 72,
                    "pemeriksaan" => [
                        "harian" => 8,
                        "bulanan" => 123,
                        "tahunan" => 200,
                    ],
                    "roles" => [
                        "administrasi" => Roles::where('id','2')->count(),
                        "poli" => Roles::where('id','3')->count(),
                        "laborat" => Roles::where('id','4')->count(),
                    ]
                ],
            ],
            
        );
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
