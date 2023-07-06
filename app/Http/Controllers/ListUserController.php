<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ListUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataUser = User::all();

        return view('rolesviews.superadmin.listuser', ['dataUser' => $dataUser]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $dataRoles = Roles::all();
        return view('rolesviews.superadmin.create.createuser', ['dataRoles' => $dataRoles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'username' => 'required|max:30|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|max:30',
            'nama_lengkap' => 'required',
            'no_telp' => 'required',
            'roles_id' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nama_lengkap' => $request->nama_lengkap,
            'no_telp' => $request->no_telp,
            'roles_id' => $request->roles_id
        ]);

        return redirect('/list-user')->with('success', 'User telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user)
    {
        //
        $dataRoles = Roles::all();
        $data = User::find($user);
        return view('rolesviews.superadmin.edit.edituser',[
            'data' => $data,
            'dataRoles' => $dataRoles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user)
    {
        //

        $request->validate([
            'email' => 'required|max:30',
            'password' => 'required|min:8|max:30',
            'nama_lengkap' => 'required',
            'no_telp' => 'required',
            'roles_id' => 'required'
        ]);

        User::where('username', $user )->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nama_lengkap' => $request->nama_lengkap,
            'no_telp' => $request->no_telp,
            'roles_id' => $request->roles_id
        ]);

        return redirect('/list-user')->with('success','User telah berhasil diperbaharui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user)
    {
        // Lakukan operasi penghapusan data
        User::destroy($user);
        return redirect('/list-user')->with('success', 'User telah berhasil dihapus');

    }
}
