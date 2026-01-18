@extends('main')

@section('title', 'Edit Mahasiswa')

@section('content')

<h1 class="mb-3">Edit Data Mahasiswa</h1>

<form action="/update/{{ $mahasiswa->id }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control"
               value="{{ $mahasiswa->name }}">
    </div>

    <div class="mb-3">
        <label>NIM</label>
        <input type="number" name="nim" class="form-control"
               value="{{ $mahasiswa->nim }}">
    </div>

    <div class="mb-3">
        <label>Program Studi</label>
        <input type="text" name="prodi" class="form-control"
               value="{{ $mahasiswa->prodi }}">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control"
               value="{{ $mahasiswa->email }}">
    </div>

    <div class="mb-3">
        <label>No HP</label>
        <input type="number" name="nohp" class="form-control"
               value="{{ $mahasiswa->nohp }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/mahasiswa" class="btn btn-secondary">Batal</a>
</form>

@endsection
