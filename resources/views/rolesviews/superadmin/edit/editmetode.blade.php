@extends('layouts.main')
@section('container')
    <div class="pagetitle">
        <h1>Perbaharui Bidang Pemeriksaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Super Admin</a></li>
                <li class="breadcrumb-item active">Perbaharui Metode Pemeriksaan</li>
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

                            <form class="row g-3" method="post" action="{{ route('list-metode.update', ['list_metode' => $data->id]) }}">
                                @csrf
                                @method('put')
                                <div class="col-md-3">
                                  <label for="Name" class="form-label">Nama Metode</label>
                                  <input type="text" value="{{ $data->name }}" class="form-control
                                  @error('name') 
                                    is-invalid
                                  @enderror
                                  " id="name" name="name">
                                </div>
                            
                                @error('name')
                                <div class="col-12">
                                    <label class="form-check-label invalid-feedback">
                                      {{ $message }}
                                    </label>
                                </div>
                                @enderror

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
