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
                <th>Nama Merk</th>
                <th>Ruangan</th>
                <th>Kondisi</th>
                <th>Posisi</th>
                <th>spek</th>

            </tr>
        </thead>
        
        <tbody>
            @php $i = 1; @endphp
            @forelse ($barang as $data)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $data->nama_barang }}</td>
                <td>{{$data->merk->nama_merk}}</td>
                <td>{{$data->ruangan->nama_ruangan}}</td>
                <td>{{$data->kondisi->kondisi}}</td>
                <td>{{ $data->posisi }}</td>
                <td>{{ $data->spek }}</td>
               </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">
                    Data data belum Tersedia.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>
