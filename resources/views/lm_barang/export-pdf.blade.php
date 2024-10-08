<!DOCTYPE html>
<html>

<head>
    <title>Export Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <center>
        <h1>{{ $title }}</h1>
    </center>
    <p>Tanggal: {{ $date }}</p>
    <table id="dataTable" class="table ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Nama Ruangan</th>
                <th>Posisi</th>
                <th>Jenis Perbaikan</th>
                <th>Waktu Pengerjaan</th>
                <th>Kondisi</th>

            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php $i = 1; @endphp
            @foreach ($m_barang as $data)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$data->barang->nama_barang}}</td>
                <td>{{$data->ruangan->nama_ruangan}}</td>
                <td>{{ $data->posisi }}</td>
                <td>{{ $data->jenis_perbaikan }}</td>
                <td>{{ $data->waktu_pengerjaan }}</td>
                <td>{{$data->kondisi->kondisi}}</td>

             </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>
