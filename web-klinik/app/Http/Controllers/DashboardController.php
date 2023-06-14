<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Roles;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periksa = Pemeriksaan::all();
        $harian = 0;
        $bulanan = 0;
        $tahunan = 0;
        foreach ($periksa as $d) {
            if (($d->created_at)->isToday()) {
                $harian++;
            }
            if (($d->created_at)->isCurrentMonth()) {
                $bulanan++;
            }
            if (($d->created_at)->isCurrentYear()) {
                $tahunan++;
            }
        }

        $data = [
            "routes" => "dashboard",
            "info" => [
                "pasien" => Pasien::all()->count(),
                "pemeriksaan" => [
                    "harian" => $harian,
                    "bulanan" => $bulanan,
                    "tahunan" => $tahunan,
                ],
                "roles" => [
                    "administrasi" => User::where('roles_id','2')->count(),
                    "poli" => User::where('roles_id','3')->count(),
                    "laborat" => User::where('roles_id','4')->count(),
                ]
            ],
        ];
        //
        return view(
            'dashboard', $data
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
