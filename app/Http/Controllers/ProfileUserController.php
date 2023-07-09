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


    public function update(Request $request)
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

    public function changePassword(){
        return view('changepassword');
    }

    public function updatePassword(Request $request){
        $request->validate([
            'password' => 'required|min:8|max:30',
            'password_confirmation' => 'required|same:password'
        ]);

        User::where('id', auth()->user()->id)
            ->update([
                'password' => Hash::make($request->password)
            ]);

        return redirect('/dashboard')->with('success', 'Password telah berhasil diubah');
    }
}
