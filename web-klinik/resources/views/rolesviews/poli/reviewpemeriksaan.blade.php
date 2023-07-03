@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Review Pemeriksaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Poli</a></li>
                <li class="breadcrumb-item active">Review Pemeriksaan</li>
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
                 
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Data Pasien</h5>
                                    <hr>
                                </div>

                                <div class="col-md-6">
                                    <h5>Data Dokter</h5>
                                    <hr>
                                </div>
                            </div>

                            <form class="row g-3" method="post" action="{{ route('review-pemeriksaan.update', ['review_pemeriksaan' => $dataPemeriksaan->id]) }}" >
                                @csrf
                                @method('PUT')
                                <div class="col-md-3">

                                    <div class="py-2">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" disabled value="{{ $dataPemeriksaan->pasiens->nama }}"
                                            class="form-control"
                                            id="nama" >
                                    </div>

                    
                                    <div class="py-2">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="text" disabled readonly value="{{ $dataPemeriksaan->pasiens->jenis_kelamin }}"
                                            class="form-control"   
                                            id="jenis_kelamin">
                                    </div>


                                    <div class="py-2">
                                        <label for="bpjs" class="form-label">BPJS</label>
                                        <input type="text" disabled readonly value="{{ $dataPemeriksaan->pasiens->bpjs }}"
                                            class="form-control" 
                                            id="bpjs" >
                                    </div>
                            

                                </div>
                                <div class="col-md-3">

                                    <div class="py-2">
                                        <label for="jenis_identitas" class="form-label">Jenis Kartu Identitas</label>
                                        <input type="text" disabled readonly value="{{ $dataPemeriksaan->pasiens->jenis_identitas }}"
                                            class="form-control" 
                                            id="jenis_identitas">
                                    </div>

                                    <div class="py-2">
                                        <label for="no_identitas" class="form-label">Nomer Identitas</label>
                                        <input type="text" disabled readonly value="{{ $dataPemeriksaan->pasiens->no_identitas }}"
                                            class="form-control" 
                                            id="no_identitas">
                                    </div>            
                                </div>

                                <div class="col-md-3">
                                    <div class="py-2">
                                        <label for="user_id" class="form-label">Id Dokter</label>

                                        <input type="text" disabled value="{{ auth()->user()->id }}"
                                            class="form-control"
                                            id="user_id" >
                                    </div>


                                    {{-- nama parameter --}}

                                    <div class="py-2">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" disabled value="{{ auth()->user()->nama_lengkap }}"
                                            class="form-control"
                                            id="namadokter" >

                                    </div>

                                    {{-- end nama parameter --}}
                                    
                                    <div class="py-2">
                                        <label for="no_telp_dokter" class="form-label">No telp</label>
                                        <input type="text" disabled value="{{ auth()->user()->no_telp }}"
                                            class="form-control"
                                            id="no_telp_dokter" >

                                    </div>
                                    
                                </div>

                                <h5 class="pt-3">Data Pemeriksaan</h5>
                                <hr>

                                <table id="myTable" class="table table-striped border-primary table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemeriksaan</th>                
                                            <th>Nilai Rujukan</th>
                                            <th>Satuan</th>
                                            <th>Hasil</th>
                                            <th>Kesan</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataKeterangan as $key => $keterangan)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $keterangan->parameter->parameter }}</td>
                                            <td>{{ $keterangan->parameter->nilai_rujukan }}</td>
                                            <td>{{ $keterangan->parameter->satuan }}</td>
                                            <td>{{ $keterangan->hasil }}</td>
                                            <td>
                                                <input type="text" name="kesan[{{ $keterangan->id }}]" 
                                                class="form-control" 
                                                id="kesan" >
                                            </td>
                                            <td>
                                                <input type="text" name="catatan[{{ $keterangan->id }}]" 
                                                class="form-control" 
                                                id="catatan" >
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>

                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
@endsection
