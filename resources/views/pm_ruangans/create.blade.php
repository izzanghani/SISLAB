@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Add Data Brand') }}</div>

                <div class="card-body">

                   <form action="{{route('pm_ruangan.store')}}" method="POST">
                     @csrf
                    <div class="mb-3">
                        <label class="form-label" >Nama Penanggung jawab</label>
                        <input type="text" class="form-control" name="penanggungjawab">\
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Instansi</label>
                        <input type="text" class="form-control" name="instansi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Jenis Kegiatan</label>
                        <input type="text" class="form-control" name="jenis_kegiatan">
                    </div>
                     <div class="mb-3">
                            <label class="form-label">Nama Ruangan</label>
                            <select class="form-control" name="id_ruangan">
                                <option value="">Pilih Ruangan</option>
                                @foreach($ruangan as $ruangan)
                                    <option value="{{ $ruangan->id }}">{{ $ruangan->nama_ruangan }}</option>
                                @endforeach
                            </select>
                        </div>
                     <div class="mb-3">
                        <label class="form-label" >Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggal_peminjaman">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >documentasi</label>
                        <input type="file" class="form-control" name="documentasi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >keterangan</label>
                        <input type="text" class="form-control" name="keterangan">
                    </div>
                    <button type="submit"class="btn btn-primary">save</button>
                   </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
