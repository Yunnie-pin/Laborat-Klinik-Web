@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Perbaharui data Petugas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Super Admin</a></li>
                <li class="breadcrumb-item active">Perbaharui data Petugas</li>
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



                            <form class="row g-3" method="post" action="{{ route('list-user.update', ['list_user' => $data->username]) }}">
                                @csrf
                                 @method('put')
                                <div class="col-md-3">
                                    {{-- Username --}}
                                    <div class="py-2">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" value="{{ $data->username }}"
                                            class="form-control"
                                            >
                                    </div>


                                    <div class="py-2">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" value="{{ $data->email }}"
                                            class="form-control 
                                        @error('email') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="email" name="email">


                                        @error('email')
                                            <div class="col-12">
                                                <label class="form-check-label invalid-feedback">
                                                    {{ $message }}
                                                </label>
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- end email --}}
                                    {{-- nama lengkap  --}}

                                    <div class="py-2">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" value="{{ $data->nama_lengkap }}"
                                            class="form-control 
                                        @error('nama_lengkap') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="nama_lengkap" name="nama_lengkap">


                                        @error('nama_lengkap')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror

                                    </div>


                                    {{-- end nama lengkap  --}}
                                    {{-- no telp  --}}

                                    <div class="py-2">
                                        <label for="no_telp" class="form-label">Nomer Telp</label>
                                        <input type="number" value="{{ $data->no_telp }}"
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


                                    {{-- end no telp  --}}


                                </div>
                                <div class="col-md-3">

                                    {{-- Roles --}}
                                    <div class="py-2">
                                        <label for="roles_id" class="form-label">Pilih Roles</label>

                                        <select id="roles_id" class="form-select" name="roles_id">
                                            @foreach ($dataRoles as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach


                                        </select>

                                        @error('roles_id')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div> 
                                    
                                   {{-- end roles --}}

                                    {{-- password  --}}

                                    <div class="py-2">
                                        <label for="no_telp" class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control 
                                        @error('password') 
                                        is-invalid
                                        @enderror
                                        "
                                            id="password" name="password" >


                                        @error('password')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror

                                    </div>


                                    {{-- end no telp  --}}


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
