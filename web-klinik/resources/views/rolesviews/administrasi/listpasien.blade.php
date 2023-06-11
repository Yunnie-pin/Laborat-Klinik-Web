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
                                            <th>Nama Pasien</th>
                                            <th>L/P</th>
                                            <th>Jenis Identitas</th>
                                            <th>Nomer Identitas</th>
                                            <th>Nomer Telp</th>
                                            <th>BPJS</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datapasien as $pasien)
                                            <tr>
                                                <td>{{ $pasien->id }}</td>
                                                <td>{{ $pasien->nama }}</td>
                                                <td>{{ $pasien->jenis_kelamin }}</td>
                                                @if ($pasien->jenis_identitas == 'KTP')
                                                    <td><button type="button" class="btn btn-outline-primary"> KTP
                                                        </button>
                                                    </td>
                                                @elseif ($pasien->jenis_identitas == 'SIM')
                                                    <td><button type="button" class="btn btn-outline-warning"> SIM
                                                        </button>   
                                                    </td>
                                                @elseif ($pasien->jenis_identitas == 'PASSPORT')
                                                    <td><button type="button" class="btn btn-outline-success"> PASSPORT
                                                        </button>
                                                    </td>
                                                @else
                                                    <td><button type="button" class="btn btn-outline-danger"> TIDAK
                                                            DIKETAHUI </button>
                                                @endif

                                                <td>{{ $pasien->no_identitas }}</td>
                                                <td>{{ $pasien->no_telp }}</td>
                                                <td>{{ $pasien->bpjs }}</td>
                                                <td>{{ $pasien->alamat }}</td>
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
