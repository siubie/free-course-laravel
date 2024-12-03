<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Biodata Mahasiswa</title>
    {{-- addd bootstrap css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    {{-- add searching forms --}}
    <form action="{{ route('biodata-mahasiswa.index') }}" method="GET">
        <input type="text" name="search" placeholder="Cari Mahasiswa" value="{{ old('search') }}">
        <button type="submit">Cari</button>
    </form>
    {{-- create table for bidata mahasiswa --}}
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($biodata_mahasiswa as $mhs)
                <tr>
                    <td>{{ ($biodata_mahasiswa->currentPage() - 1) * $biodata_mahasiswa->perPage() + $loop->iteration }}
                    </td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Data Mahasiswa Tidak Ada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{-- show pagination --}}
    {{ $biodata_mahasiswa->withQueryString()->links() }}

</body>

</html>
