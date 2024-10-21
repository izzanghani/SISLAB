<!DOCTYPE html>
<html>
<head>
    <center>
        <h2>{{ $title }}</h2>
    </center>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .title {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
        .date {
            text-align: left;
            margin-top: 10px;
        }
    </style>
</head>
<body>


    <p>Tanggal: {{ $date }}</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Penanggung Jawab</th>
                <th>Instansi</th>
                <th>Jenis Kegiatan</th>
                <th>Nama Ruangan</th>
                <th>Tanggal Peminjaman</th>
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
