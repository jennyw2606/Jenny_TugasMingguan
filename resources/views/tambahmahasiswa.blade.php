<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
<div class="container mt-4">

    <h3 class="mb-3">Tambah Data Mahasiswa</h3>

    {{-- ERROR VALIDASI --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/mahasiswa/simpan" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text"
                           name="nama"
                           value="{{ old('nama') }}"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="number"
                           name="nim"
                           value="{{ old('nim') }}"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Program Studi</label>
                    <input type="text"
                           name="prodi"
                           value="{{ old('prodi') }}"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input type="text"
                           name="nohp"
                           value="{{ old('nohp') }}"
                           class="form-control"
                           required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Data
                </button>

                <a href="/mahasiswa" class="btn btn-secondary ms-2">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
=======
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

>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa
@endsection
