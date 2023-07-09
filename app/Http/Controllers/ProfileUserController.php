<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('profile');
        
    }


    public function update(Request $request, $user)
    {
        //
        $request->validate([
            'nama_lengkap' => 'required',
            'no_telp' => 'required',
        ]);

        if(!Hash::check($request->password, auth()->user()->password)){
            return redirect('/dashboard')->with('error', 'Profile gagal diperbaharui, Password Salah');
        }

        User::where('id', auth()->user()->id)
            ->update([
                'nama_lengkap' => $request->nama_lengkap,
                'no_telp' => $request->no_telp
            ]);

        return redirect('/dashboard')->with('success', 'Profile telah berhasil diubah');
    }
}
