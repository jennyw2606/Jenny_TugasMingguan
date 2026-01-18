<<<<<<< HEAD
@extends('layouts.app')
=======
@extends('main')
>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa

@section('title', 'Data Mahasiswa')

@section('content')

<<<<<<< HEAD
<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="mb-0">Data Mahasiswa</h3>
                <small class="text-muted">Halaman ini berisi data mahasiswa</small>
            </div>

            <a href="/mahasiswa/tambah" class="btn btn-primary">
                + Tambah Data
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th width="160">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($mahasiswas as $mhs)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->prodi }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->nohp }}</td>
                        <td class="text-center">

                            <a href="/mahasiswa/edit/{{ $mhs->id }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="/mahasiswa/delete/{{ $mhs->id }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                <button type="submit"
                                        class="btn btn-danger btn-sm btn-delete">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">
                            Data mahasiswa belum tersedia
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
=======
<h1 class="mb-3">Data Mahasiswa</h1>

<a href="/tambahmahasiswa" class="btn btn-success mb-3">Tambah Data</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswas as $index => $mahasiswa)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mahasiswa->name }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->prodi }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->nohp }}</td>
            <td>
                <a href="/edit/{{ $mahasiswa->id }}" class="btn btn-primary btn-sm">Edit</a>

                <a href="#" class="btn btn-danger btn-sm delete"
                   data-id="{{ $mahasiswa->id }}"
                   data-nama="{{ $mahasiswa->name }}">
                   Hapus
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- CDN --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

{{-- SWEET ALERT SUCCESS (TAMBAH / HAPUS / EDIT) --}}
@if (session('success'))
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        icon: 'success',
    });
</script>
@endif

{{-- SWEET ALERT DELETE --}}
<script>
    $(document).on('click', '.delete', function () {

        let id   = $(this).data('id');
        let nama = $(this).data('nama');

        Swal.fire({
            title: 'Yakin dihapus?',
            text: 'Data ' + nama + ' akan dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletedata/" + id;
            }
        });
    });
</script>
>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa

@endsection
