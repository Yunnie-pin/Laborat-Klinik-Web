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

                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="py-3">
                                <a class="btn btn-success" href="{{ route('create-metode') }}">
                                    <i class="bi bi-plus">Tambah Metode</i>
                                </a>
                            </div>

                            <div class="row p-3 border border-primary ">

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
                                                            <div class="col-auto px-4 py-2">
                                                                <a href="{{ route('list-metode.edit', ['list_metode' => $data->id]) }}"
                                                                 class="btn btn-warning">
                                                                    <i class="bi bi-pencil text-white"> Perbaharui Data</i>
                                                                </a>
                                                            </div>


                                                            <div
                                                            class="col-auto px-2 py-2 mr-auto
                                                        ">
                                                            <form
                                                                action="{{ route('list-metode.destroy', ['list_metode' => $data->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button class="btn btn-danger"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus bidang ini?')">
                                                                    <i class="bi bi-trash2"> Hapus Data</i>
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
