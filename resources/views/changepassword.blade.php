@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Change Password</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active">Profile</li>
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

                            <form class="row g-3" method="post" action="{{route('update-password') }}">
                                @csrf
                                <div class="col-md-4">
                                    <div class="pb-2">
                                        <label for="nama" class="form-label">Email</label>
                                        <input type="text" value="{{ auth()->user()->email }}" class="form-control"
                                            disabled>
                                    </div>

                                    <div class="pb-2">
                                        <label for="nama" class="form-label">Pasword Baru</label>
                                        <input type="password" name="password" id="password"
                                        class="form-control
                                        @error('password') 
                                        is-invalid
                                        @enderror
                                        ">

                                        @error('password_confirmation')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>

                                    <div class="pb-2">
                                        <label for="nama" class="form-label">Konfirmasi Password Baru</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control
                                        @error('password_confirmation') 
                                        is-invalid
                                        @enderror
                                        ">
                                        
                                        @error('password_confirmation')
                                            <label class="form-check-label invalid-feedback">
                                                {{ $message }}
                                            </label>
                                        @enderror
                                    </div>
            
                                </div>
                        
                                <div class="col-12 py-2">
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