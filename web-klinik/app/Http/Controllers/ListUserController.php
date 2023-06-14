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
        return view('rolesviews.superadmin.create.createuser',['dataRoles' => $dataRoles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'username' => 'required|unique:users|max:30',
            'email' => 'required|unique:users|max:30',
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

        return redirect('/list-user')->with('success','User telah berhasil ditambahkan');

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
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
