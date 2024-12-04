<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Mahasiswa</title>
</head>

<body>
    {{-- create a form --}}
    <form action="{{ route('biodata-mahasiswa.store') }}" method="POST">
        @csrf
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="{{ old('nim') }}">
        {{-- show validation error --}}
        @error('nim')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}">
        @error('nama')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
        @error('alamat')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" value="{{ old('jurusan') }}">
        @error('jurusan')
            <div>{{ $message }}</div>
        @enderror
        <br>
        {{-- add nomor telepon --}}
        <label for="nomor_telepon">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon') }}">
        @error('nomor_telepon')
            <div>{{ $message }}</div>
        @enderror
        <button type="submit">Simpan</button>
</body>

</html>
