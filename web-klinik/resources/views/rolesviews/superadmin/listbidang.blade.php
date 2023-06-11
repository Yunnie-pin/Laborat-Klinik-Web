@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Data Pasien</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Administrasi</a></li>
                <li class="breadcrumb-item active">Data Pasien</li>
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
                                            <th>Bidang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataBidang as $bidang)
                                            <tr>
                                                <td>{{ $bidang->id }}</td>
                                                <td>{{ $bidang->name }}</td>

                                                <td>
                                                   <div class="row">
                                                    <div class="col-auto mr-auto px-4 py-2">
                                                        <button type="button" class="btn btn-warning">
                                                            <i class="bi bi-pencil "></i>
                                                        </button>
                                                    </div>
                                                    <div class="col px-4 py-2">
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="bi bi-trash3 "></i>
                                                        </button>
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
