@extends('main')

@section('title', 'Tambah Mahasiswa')

@section('content')

<h1 class="mb-3">Tambah Data Mahasiswa</h1>

<form action="/insertdata" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="number" name="nim" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Program Studi</label>
        <input type="text" name="prodi" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">No HP</label>
        <input type="number" name="nohp" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
</form>

@endsection
