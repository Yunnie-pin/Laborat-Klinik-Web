@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Perbaharui Parameter Pemeriksaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Super Admin</a></li>
                <li class="breadcrumb-item active">Perbaharui Parameter Pemeriksaan</li>
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

                            {{-- 'bidang_id' => 1,
                            'parameter' => 'Hitung Trombosit',
                            'nilai_rujukan' => '150-450 rb/mm3',
                            'metode_id' => 2,
                            'satuan' => 'rb/mm3',
                            'harga' => '10000', --}}


                            <form class="row g-3" method="post"  action="{{ route('list-parameter.update', ['list_parameter' => $data->id]) }}">
                                @csrf
                                @method('put')
                                <div class="col-md-3">
                                    {{-- nama parameter --}}
                                    <div class="py-2">
                                        <label for="parameter" class="form-label">Nama Parameter</label>
                                        <input type="text" value='{{ $data->parameter }}'
                                            class="form-control 
                                    @error('parameter') 
                                        is-invalid
                                    @enderror
                                    "
                                            id="parameter" name="parameter">
                                        @error('parameter')
                                            <div class="col-12">
                                                <label class="form-check-label invalid-feedback">
                                                    {{ $message }}
                                                </label>
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- end nama parameter  --}}
                                    {{-- nilai rujukan --}}


                                    <div class="py-2">
                                        <label for="Nilai rujukan" class="form-label">Nilai Rujukan</label>
                                        <input type="text" value="{{ $data->nilai_rujukan }}"
                                            class="form-control 
                                        @error('nilai_rujukan') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="nilai_rujukan" name="nilai_rujukan">


                                        @error('nilai_rujukan')
                                            <div class="col-12">
                                                <label class="form-check-label invalid-feedback">
                                                    {{ $message }}
                                                </label>
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- end nilai rujukan --}}
                                    {{-- satuan  --}}

                                    <div class="py-2">
                                        <label for="satuan" class="form-label">Satuan</label>
                                        <input type="text" value='{{ $data->satuan }}'
                                            class="form-control 
                                        @error('satuan') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="satuan" name="satuan">

                                        @error('satuan')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror

                                    </div>


                                    {{-- end satuan  --}}
                                    {{-- harga  --}}

                                    <div class="py-2">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="text" value='{{ $data->harga }}'
                                            class="form-control 
                                        @error('harga') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="harga" name="harga">


                                        @error('harga')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror

                                    </div>


                                    {{-- end harga  --}}


                                </div>
                                <div class="col-md-3">

                                    {{-- bidang --}}
                                    <div class="py-2">
                                        <label for="bidang_id" class="form-label">Pilih Bidang Pemeriksaan</label>

                                        <select id="bidang_id" class="form-select" name="bidang_id" >
                                            @foreach ($dataBidang as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach


                                        </select>

                                        @error('bidang_id')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
                                    {{-- end bidang --}}

                                    {{-- metode --}}
                                    <div class="py-2">
                                        <label for="metode_id" class="form-label">Pilih Metode Pemeriksaan</label>
                                        <select id="metode_id" class="form-select" name="metode_id">
                                            @foreach ($dataMetode as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- end metode --}}

                                    @error('bidang_id')
                                        <label class="form-check-label invalid-feedback">
                                            {{ $message }}
                                        </label>
                                    @enderror

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
