@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Data Petugas / User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">super</a></li>
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
                                        @foreach($dataUser as $user)
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
                                                            <button type="button" class="btn btn-warning">
                                                                <i class="bi bi-pencil "></i>
                                                            </button>
                                                        </div>
                                                        <div class="col px-1 py-2">
                                                            <button type="button" class="btn btn-danger">
                                                                <i class="bi bi-trash3 "></i>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                        
                                    </tbody>

                                </table>
                            </div>

                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
@endsection
