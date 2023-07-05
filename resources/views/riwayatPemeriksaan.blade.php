@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Riwayat Pemeriksaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Riwayat Pemeriksaan</li>
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

                                <div class="p-3 row justify-content-start">
                                    <form class="col" action="{{ route('riwayat-pemeriksaan-search', ['search' => '1']) }}" method="GET">
                                        <button type="submit" class="btn btn-outline-primary ">Belum Diproses</button>
                                    </form>
                                    <form class="col" action="{{ route('riwayat-pemeriksaan-search', ['search' => '2']) }}" method="GET">
                                        <button type="submit" class="btn btn-outline-warning">Menunggu Direview</button>
                                    </form>
                                    <form class="col" action="{{ route('riwayat-pemeriksaan-search', ['search' => '3']) }}" method="GET">
                                        <button type="submit" class="btn btn-outline-success">Selesai</button>
                                    </form>
                                    <form class="col" action="{{ route('riwayat-pemeriksaan-search', ['search' => '4']) }}" method="GET">
                                        <button type="submit" class="btn btn-outline-danger">Dibatalkan</button>
                                    </form>
                                </div>

                                <table id="myTable" class="table table-striped border-primary table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id pemeriksaan</th>
                                            <th>Nama Pasien</th>
                                            <th>Dokter</th>
                                            <th>Waktu</th>
                                            <th>Proses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataPemeriksaan as $pemeriksaan)
                                        <tr>
                                            <td>{{ $pemeriksaan->id }}</td>
                                            <td>{{ $pemeriksaan->pasiens->nama }}</td>
                                            <td>{{ $pemeriksaan->user->nama_lengkap }}</td>
                                            <td>{{ $pemeriksaan->created_at }}</t   d>
                                            @if (($pemeriksaan->status->id)==1)
                                            <td class="bg-primary text-white">
                                                {{ $pemeriksaan->status->name }}
                                            </td>
                                            @elseif (($pemeriksaan->status->id)==2)
                                            <td class="bg-warning text-white">
                                                {{ $pemeriksaan->status->name }}
                                            </td>
                                            @elseif (($pemeriksaan->status->id)==3)
                                            <td class="bg-success text-white">
                                                {{ $pemeriksaan->status->name }}
                                            </td>
                                            @else
                                            <td class="bg-danger text-white">
                                                {{ $pemeriksaan->status->name }}
                                            </td>
                                            @endif
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
