
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('ruangan.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('ruangan.update', $ruangan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                       <div class="mb-3">
                            <label class="form-label">Nama ruangan</label>
                            <input type="text" class="form-control @error('nama_ruangan') is-invalid @enderror" name="nama_ruangan"
                                value="{{ $ruangan->nama_ruangan }}" placeholder="nama ruangan" required>
                            @error('nama_ruangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama pic</label>
                            <input type="text" class="form-control @error('nama_pic') is-invalid @enderror" name="nama_pic"
                                value="{{ $ruangan->nama_pic }}" placeholder="nama pic" required>
                            @error('nama_pic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah komputer</label>
                            <input type="text" class="form-control @error('jml_komputer') is-invalid @enderror" name="jml_komputer"
                                value="{{ $ruangan->jml_komputer }}" placeholder="jumlah komputer" required>
                            @error('jml_komputer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Laptop</label>
                            <input type="text" class="form-control @error('jml_leptop') is-invalid @enderror" name="jml_leptop"
                                value="{{ $ruangan->jml_leptop }}" placeholder="jumlah laptop" required>
                            @error('jml_leptop')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>





                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-sm btn-danger">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
