@extends('layouts.app')

@section('title', 'Edit Data Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header fw-bold">
        ✏️ Edit Data Mahasiswa
    </div>

    <div class="card-body">
        <form action="/mahasiswa/edit/{{ $mahasiswa->id }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ $mahasiswa->nama }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="number"
                       name="nim"
                       class="form-control"
                       value="{{ $mahasiswa->nim }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prodi</label>
                <input type="text"
                       name="prodi"
                       class="form-control"
                       value="{{ $mahasiswa->prodi }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       value="{{ $mahasiswa->email }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="number"
                       name="nohp"
                       class="form-control"
                       value="{{ $mahasiswa->nohp }}"
                       required>
            </div>

            <button class="btn btn-primary">
                💾 Update Data
            </button>

            <a href="/mahasiswa" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection
