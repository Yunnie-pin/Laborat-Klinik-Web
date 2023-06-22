@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Registrasi Pemeriksaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Poli</a></li>
                <li class="breadcrumb-item active">Registrasi Pemeriksaan</li>
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

                            {{-- 'nama',
                            'tanggal_lahir',
                            'jenis_identitas',
                            'jenis_kelamin',
                            'no_identitas',
                            'no_telp',
                            'bpjs',
                            'alamat' --}}

                            <h5>Data Pasien</h5>
                            <hr>
                            <form class="row g-3" method="post" action="{{ route('registrasi-pemeriksaan.create') }}">
                                @csrf
                                <div class="col-md-3">

                                    <div class="py-2">
                                        <label for="pasien_id" class="form-label">Id Pasien</label>

                                        <select id="pasien_id" class="form-select" name="pasien_id">
                                            @foreach ($datapasien as $data)
                                            <option value="{{ $data->id }}">{{ $data->id }}</option>
                                            @endforeach
                                        </select>

                                    </div>



                                    {{-- nama parameter --}}

                                    <div class="py-2">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" disabled 
                                            class="form-control"
                                            id="nama" >

                                    </div>

                                    {{-- end nama parameter --}}
                                    
                                    {{-- jenis kelamin  --}}

                                    <div class="py-2">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="text" disabled readonly
                                            class="form-control"   
                                            id="jenis_kelamin">
                                    </div>


                                    {{-- end jenis kelamin  --}}
                                    

                                    {{-- nomer telp  --}}

                                    <div class="py-2">
                                        <label for="bpjs" class="form-label">BPJS</label>
                                        <input type="text" disabled readonly
                                            class="form-control" 
                                            id="bpjs" >
                                    </div>
                                    {{-- end nomer telp  --}}


                                </div>
                                <div class="col-md-3">


                                    {{-- jenis kelamin --}}

                                    <div class="py-2">
                                        <label for="jenis_identitas" class="form-label">Jenis Kartu Identitas</label>
                                        <input type="text" disabled readonly
                                            class="form-control" 
                                            id="jenis_identitas">
                                    </div>
                                    {{-- end jenis kelamin --}}


                                    <div class="py-2">
                                        <label for="no_identitas" class="form-label">Nomer Identitas</label>
                                        <input type="text" disabled readonly
                                            class="form-control" 
                                            id="no_identitas">
                                    </div>


                                   

                                </div>


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

    <script>
        const idPasien = document.querySelector('#pasien_id');
        const nama = document.querySelector('#nama');
        const jeniskelamin = document.querySelector('#jenis_kelamin');
        const bpjs = document.querySelector('#bpjs');
        const jeniskartuidentitas = document.querySelector('#jenis_identitas');
        const nomeridentitas = document.querySelector('#no_identitas')

        idPasien.addEventListener('change', function(){
            fetch('/getDataPasien/' + idPasien.value)
                .then(response => response.json())
                .then(data => {
                    nama.value = data.nama;
                    jeniskelamin.value =  data.jenis_kelamin;
                    bpjs.value = data.bpjs;
                    jeniskartuidentitas. value = data.jenis_identitas;
                    nomeridentitas.value = data.no_identitas;
                    }
                )
        });

    </script>
@endsection
