{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.admin')
@section('content')

<div class="container-fluid ">
    <div class="row page-titles mx-0">
        <div class="col-sm-12 p-md-0">
            <div class="welcome-text">
              <center><h1>SEMALAT DATANG DI HALAMAN ADMIN</h1></center>
              <center><h4>Hi, welcome back!</h4></center>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <div class="col-lg-4 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text"><h4>Jumlah Data di Tabel Barang</h4></div>
                    <div class="stat-digit"> <i class="fa "></i>{{$barang}} Data</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text"><H4>Jumlah Data di Tabel Ruangan</H4></div>
                    <div class="stat-digit"> <i class="fa "></i>{{$ruangan}} Data</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text"><H4>Jumlah Data di Tabel Merk</H4></div>
                    <div class="stat-digit"> <i class="fa "></i>{{$merk}} Data</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Task Completed</div>
                    <div class="stat-digit"> <i class="fa fa-usd"></i>650</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div> --}}
    <!-- /# column -->

        {{-- <div class="col-lg-12 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sales Overview</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12 col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


</div>
</div>

@endsection
