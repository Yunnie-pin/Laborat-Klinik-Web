@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Perbaharui data Pasien</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Administrasi</a></li>
                <li class="breadcrumb-item active">Perbaharui data Pasien</li>
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


                            <form class="row g-3" method="post" action="{{ route('list-pasien.update',['list_pasien' => $pasien->id]) }}">
                                @csrf
                                @method('put')
                                <div class="col-md-3">
                                    {{-- nama parameter --}}
                                    <div class="py-2">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" value="{{ $pasien->nama }}"
                                            class="form-control 
                                    @error('nama') 
                                        is-invalid
                                    @enderror
                                    "
                                            id="nama" name="nama">
                                        @error('nama')
                                            <div class="col-12">
                                                <label class="form-check-label invalid-feedback">
                                                    {{ $message }}
                                                </label>
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- end nama parameter --}}
                                    {{-- nilai rujukan --}}


                                    <div class="py-2">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="text" value="{{ $pasien->tanggal_lahir }}"
                                            class="form-control 
                                        @error('tanggal_lahir') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="tanggal_lahir" name="tanggal_lahir">


                                        @error('tanggal_lahir')
                                            <div class="col-12">
                                                <label class="form-check-label invalid-feedback">
                                                    {{ $message }}
                                                </label>
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- end nilai rujukan --}}
                                    {{-- jenis kelamin  --}}

                                    <div class="py-2">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>

                                        <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                           
                                        </select>

                                        @error('jenis_kelamin')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>


                                    {{-- end jenis kelamin  --}}
                                    {{-- nomer telp  --}}

                                    <div class="py-2">
                                        <label for="no_telp" class="form-label">No telepon</label>
                                        <input type="number" value="{{ $pasien->no_telp }}"
                                            class="form-control 
                                        @error('no_telp') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="no_telp" name="no_telp">


                                        @error('no_telp')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                    {{-- end nomer telp  --}}

                                    {{-- nomer telp  --}}

                                    <div class="py-2">
                                        <label for="bpjs" class="form-label">BPJS</label>
                                        <input type="text" value="{{ $pasien->bpjs }}"
                                            class="form-control 
                                        @error('bpjs') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="bpjs" name="bpjs">


                                        @error('bpjs')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                    {{-- end nomer telp  --}}


                                </div>
                                <div class="col-md-3">

                                    {{-- jenis kelamin --}}
                                    <div class="py-2">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>

                                        <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                           
                                        </select>

                                        @error('jenis_kelamin')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                    {{-- end jenis kelamin --}}

                                    {{-- jenis kelamin --}}
                                    <div class="py-2">
                                        <label for="jenis_identitas" class="form-label">Jenis Kartu Identitas</label>

                                        <select id="jenis_identitas" class="form-select" name="jenis_identitas">
                                                <option value="KTP">KTP</option>
                                                <option value="SIM">SIM</option>
                                                <option value="PASSPORT">PASSPORT</option>
                                        </select>

                                        @error('jenis_identitas')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                    {{-- end jenis kelamin --}}

                                    <div class="py-2">
                                        <label for="no_identitas" class="form-label">Nomer Identitas</label>
                                        <input type="number" value="{{ $pasien->no_identitas }}"
                                            class="form-control 
                                        @error('bpjs') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="no_identitas" name="no_identitas">


                                        @error('no_identitas')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                    {{-- end nomer identitas  --}}

                                    <div class="py-2">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea type="text"
                                            class="form-control 
                                        @error('alamat') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="alamat" name="alamat">{{ $pasien->alamat }}</textarea>


                                        @error('alamat')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                    {{-- end nomer identitas  --}}

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
@endsection
