@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
<div class="container mt-10">
    <div class="row page-titles mx-0">
        <div class="col-sm-12 p-md-0">
            <div class="welcome-text">
              <h4>Tables / Maintenance Barang</h4>
            </div>
        </div>
    </div>
</div>
<div class="container">


<div class="card">
    <div class="card-header">
        <div class="float-start">
            <h5>Maintenance Barang</h5>
        </div>
        <div class="float-end ">
            <a href="{{ route('pm_ruangan.create') }}" class="btn btn-sm btn-primary">Add</a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive text-nowrap">
<table class="table caption-top">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Penanggungjawab</th>
                                <th scope="col">Instansi</th>
                                <th scope="col">Jenis kegiatan</th>
                                <th scope="col">Nama Ruangan</th>
                                <th scope="col">Tanggal peminjaman</th>
                                <th scope="col">Documentasi</th>
                                <th scope="col">keterangan</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ( $pm_ruangan as $data )
                             <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->penanggungjawab}}</td>
                                <td>{{$data->instansi}}</td>
                                <td>{{$data->Jenis_kegiatan}}</td>
                                <td>{{$data->id_ruangan}}</td>
                                <td>{{$data->tanggal_peminjaman}}</td>
                                <td>
                                    <img src="{{ asset('/images/pm_ruangan/' . $data->documentasi) }}"
                                        style="width: 150px">
                                </td>
                                <td>{{$data->keterangan}}</td>
                                <form action="{{route('pm_ruangan.destroy',$data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td>
                                   <a href="{{route('pm_ruangan.edit',$data->id)}}"><button type="button" class="btn btn-outline-success">Edit</button></a>
                                   <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </td>
                                </form>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>

        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example');
</script>
@endpush


