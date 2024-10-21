<!DOCTYPE html>
<html>

<head>
    <title>Export PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <center>
        <h2>Data Laporan Peminjaman Ruangan</h2>
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
    
    <p>Tanggal: {{ $date }}</p>
    <table id="dataTable" class="table ">
        <thead>
            <tr>
                <th>No</th>
                <th>Penanggung Jawab</th>
                <th>Instansi</th>
                <th>Jenis Kegiatan</th>
                <th>Nama Ruangan</th>
                <th>Tanggal Peminjaman</th>
                <th>Keterangan</th>

            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php $i = 1; @endphp
            @foreach ($pm_ruangan as $data)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $data->penanggungjawab }}</td>
                <td>{{ $data->instansi }}</td>
                <td>{{$data->jenis_kegiatan}}</td>
                <td>{{$data->ruangan->nama_ruangan}}</td>
                <td>{{ $data->tanggal_peminjaman }}</td>
                <td  style="width: 80px">{{ $data->keterangan }}</td>

        </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>
