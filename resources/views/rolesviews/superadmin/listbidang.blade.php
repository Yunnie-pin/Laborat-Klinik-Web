@extends('layouts.main')

@section('container')
    <div class="pagetitle">
        <h1>Data Bidang Pemeriksaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Super Admin</a></li>
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
                                <a class="btn btn-success" href="list-bidang/create" role="button">
                                    <i class="bi bi-plus">Tambah Bidang</i>
                                </a>
                            </div>

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
                                                    <div class="row ">
                                                        <div class="col-auto px-4 py-2">
                                                            <a href="{{ route('list-bidang.edit', ['list_bidang' => $bidang->id]) }}"
                                                                type="button" class="btn btn-warning">
                                                                <i class="bi bi-pencil text-white"> Perbaharui Data</i>
                                                            </a>
                                                        </div>

                                                        <div
                                                            class="col-auto px-2 py-2 mr-auto
                                                        ">
                                                            <form
                                                                action="{{ route('list-bidang.destroy', ['list_bidang' => $bidang->id]) }}"
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
