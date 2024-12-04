<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa Detail</title>
</head>

<body>
    {{-- create table for mahasiswa detail --}}
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $biodataMahasiswa->nim }}</td>
                <td>{{ $biodataMahasiswa->nama }}</td>
                <td>{{ $biodataMahasiswa->alamat }}</td>
                <td>{{ $biodataMahasiswa->jurusan }}</td>
                <td>{{ $biodataMahasiswa->nomor_telepon }}</td>
            </tr>
        </tbody>
</body>

</html>
