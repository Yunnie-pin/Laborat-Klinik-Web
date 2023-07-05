@extends('layouts.main')
@section('container')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <div class="card">
                    @if (session()->has('success'))
                    <div class="alert alert-success p-1" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (session()->has('error'))
                    <div class="alert alert-danger p-1" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="row">
                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6 mt-5">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Total <span class="text">|
                                                Pasien</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6 class="text">{{ $info['pasien'] }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->
                        </div>
                        <div class="row">
                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6 mt-5">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Total <span>| Pemeriksaan Harian</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $info['pemeriksaan']['harian'] }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->
                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6 mt-5">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Total <span>| Pemeriksaan Bulanan</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6> {{ $info['pemeriksaan']['bulanan'] }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->
                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6 mt-5">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Total <span>| Pemeriksaan Tahunan</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6> {{ $info['pemeriksaan']['tahunan'] }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->


                        </div>
                        <div class="row">
                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6 mt-5">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Bidang <span>| Admintrasi</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $info['roles']['administrasi'] }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->
                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6 mt-5">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Bidang <span>| Poli</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $info['roles']['poli'] }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->
                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6 mt-5">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Bagian <span>| Laborat</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6> {{ $info['roles']['laborat'] }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->


                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Left side columns -->

    </div>
</section>


@endsection
 