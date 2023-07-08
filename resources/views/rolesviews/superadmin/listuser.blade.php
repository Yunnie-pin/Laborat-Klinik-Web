@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Data Petugas / User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Super Admin</a></li>
                <li class="breadcrumb-item active">Data Petugas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body p-3">

                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                        <div class="row">
                            <div class="col py-3">
                                <a class="btn btn-success" href="{{ route('create-user') }}">
                                    <i class="bi bi-plus">Pendaftaran Petugas</i>
                                </a>
                            </div>

                            <div class="col">
                                <form class="py-3 " action="{{ route('search-user') }}" method="GET">
                                    <div class="row justify-content-end">
                                        <div class="col-md-3">
                                            <input type="text" name="search" class="form-control"  required/>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                           

                            <!-- card -->
                            <div class="row p-3 border border-primary ">


                                <table id="myTable" class="table table-striped border-primary table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nama Lengkap</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>No telp</th>
                                            <th>Roles</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataUser as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->nama_lengkap }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->no_telp }}</td>
                                                <td>{{ $user->roles->name }}</td>
                                                <td>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col px-1 py-2">


                                                                <a href="{{ route('list-user.edit', ['list_user' => $user->id]) }}"
                                                                    class="btn btn-warning">
                                                                    <i class="bi bi-pencil text-white"></i>
                                                                </a>


                                                            </div>
                                                            <div class="col px-1 py-2">
                                                                <form
                                                                    action="{{ route('list-user.destroy', ['list_user' => $user->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button class="btn btn-danger"
                                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus User ini?')">
                                                                        <i class="bi bi-trash3 "></i>
                                                                    </button>


                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                                
                                {!! $dataUser->render() !!}

                            </div>

                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
@endsection
