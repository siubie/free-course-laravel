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

    <br>
    {{-- add a button to redirect to create page --}}
    <a href="{{ route('biodata-mahasiswa.create') }}">Tambah Mahasiswa</a>
    <br>
    {{-- create table for bidata mahasiswa --}}
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Action</th>
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
                    <td>
                        <a href="{{ route('biodata-mahasiswa.show', $mhs->id) }}">View</a>
                        <a href="{{ route('biodata-mahasiswa.edit', $mhs->id) }}">Edit</a>
                        {{-- add delete form --}}
                        <form action="{{ route('biodata-mahasiswa.destroy', $mhs->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                        </form>
                    </td>

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
