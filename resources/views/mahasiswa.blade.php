@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')

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

@endsection
