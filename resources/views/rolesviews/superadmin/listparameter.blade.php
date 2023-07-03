@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Data Parameter Pemeriksaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Super Admin</a></li>
                <li class="breadcrumb-item active">Data Parameter Pemeriksaan</li>
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

                            <div class="py-3">
                                <a class="btn btn-success" href="{{ route('create-parameter') }}">
                                    <i class="bi bi-plus">Tambah Parameter</i>
                                </a>
                            </div>

                            <!-- card -->
                            <div class="row p-3 border border-primary ">


                                <table id="myTable" class="table table-striped border-primary table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Bidang</th>
                                            <th>Metode</th>
                                            <th>Parameter</th>
                                            <th>Nilai Rujukan</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataParameter as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->bidang->name }}</td>
                                                <td>{{ $data->metode->name }}</td>
                                                <td>{{ $data->parameter }}</td>
                                                <td>{{ $data->nilai_rujukan }}</td>
                                                <td>{{ $data->satuan }}</td>
                                                <td>{{ $data->harga }}</td>

                                                <td>
                                                    <div class="row">
                                                        <div class="col-auto mr-auto px-4 py-2">
                                                            
                                                            <a href="{{ route('list-parameter.edit', ['list_parameter' => $data->id]) }}"
                                                                class="btn btn-warning">
                                                                <i class="bi bi-pencil text-white"></i>
                                                            </a>


                                                        </div>



                                                        <div class="col px-4 py-2">

                                                            <form
                                                                action="{{ route('list-parameter.destroy', ['list_parameter' => $data->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button class="btn btn-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus bidang ini?')"
                                                                >
                                                                    <i class="bi bi-trash3 "></i>
                                                                </button>


                                                            </form>

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
