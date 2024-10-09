<!DOCTYPE html>
<html>

<head>
    <title>Export PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <center>
        <h2>Data Laporan Peminjaman Barang</h2>
    </center>
    <p>Tanggal: {{ $date }}</p>
    <table id="dataTable" class="table ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Email</th>
                <th>Instansi</th>
                <th>Nama Barang</th>
                <th>Nama Ruangan</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Keterangan</th>
                <th>Kondisi</th>

            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php $i = 1; @endphp
            @foreach ($pm_barang as $data)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $data->nama_peminjam }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->instansi }}</td>
                <td>{{$data->barang->nama_barang}}</td>
                <td>{{$data->ruangan->nama_ruangan}}</td>
                <td>{{ $data->tanggal_peminjaman }}</td>
                <td>{{ $data->tanggal_pengembalian }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{$data->kondisi->kondisi}}</td>
              

        </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>
