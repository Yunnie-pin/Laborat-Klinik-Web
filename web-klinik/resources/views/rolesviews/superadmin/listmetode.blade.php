@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Data Metode Pemeriksaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Super Admin</a></li>
                <li class="breadcrumb-item active">Data Bidang Pemeriksaan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="card">
                        <div class="card-body p-3">
                            <!-- card -->
                            <div class="row p-3 border border-primary ">


                                @if (session()->has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="py-3">
                                    <a class="btn btn-success" href="{{ route('create-metode') }}" >
                                        <i class="bi bi-plus">Tambah Metode</i>
                                    </a>
                                </div>


                                <table id="myTable" class="table table-striped border-primary table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Metode</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataMetode as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->name }}</td>


                                                <td>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-auto px-1 py-2">
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
