@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h5>Barang</h5>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('barang.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control @error('barang') is-invalid @enderror" name="nama_barang"
                            value="{{ old('barang') }}" placeholder="Nama barang" required>
                            @error('barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Nama Merk</label>
                            <select name="id_merk" id="" class="form-control">
                                @foreach ($merk as $data)
                                    <option value="{{$data->id}}">{{ $data->nama_merk}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="dropdown">
                            <label for="ruangan">Ruangan</label>
                            <select class="form-control" name="ruangan">
                                <option value=""></option>
                                <option value="lab2.1">Lab 2.1</option>
                                <option value="lab2.2">Lab 2.2</option>
                                <option value="lab2.3">Lab 2.3</option>
                                <option value="lab2.4">Lab 2.4</option>
                                <option value="lab3.1">Lab 3.1</option>
                                <option value="lab3.2">Lab 3.2</option>
                                <option value="lab3.3">Lab 3.3</option>
                                <option value="lab3.4">Lab 3.4</option>
                                <option value="lab3.5">Lab 3.5</option>
                                <option value="lab3.6">Lab 3.6</option>
                                <option value="lab3.7">Lab 3.7</option>
                                <option value="lab4.1">Lab 4.1</option>
                                <option value="lab4.2">Lab 4.2</option>
                                <option value="lab4.3">Lab 4.3</option>
                                <option value="lab4.4">Lab 4.4</option>
                                <option value="lab4.5">Lab 4.5</option>
                            </select>
                            @error('ruangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="">kondisi</label>
                            <select name="id_kondisi" id="" class="form-control">
                                @foreach ($kondisi as $data)
                                    <option value="{{$data->id}}">{{ $data->kondisi}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Posisi</label>
                            <input type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi"
                            value="{{ old('posisi') }}" placeholder="posisi" required>
                            @error('posisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Spek</label>
                            <input type="text" class="form-control @error('spek') is-invalid @enderror" name="spek"
                            value="{{ old('spek') }}" placeholder="spek" required>
                            @error('spek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                    <br>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
