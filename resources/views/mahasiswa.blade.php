@extends('main')

@section('title', 'Data Mahasiswa')

@section('content')

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

@endsection
