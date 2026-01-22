@extends('layouts.app')

@section('title', 'Profile - MyApp')

@section('content')

<section class="profile py-4">
    <div class="profile-container">

        <!-- HEADER -->
        <div class="profile-header text-center mb-4">
            <h1 class="header-title fw-bold">Profil Pengguna</h1>
            <p class="header-subtitle text-muted">
                Kelola dan lihat informasi akun Anda
            </p>
        </div>

        <div class="row g-4">

            <!-- SIDEBAR -->
            <aside class="col-lg-4">
                <div class="card text-center p-4">

                    <!-- FOTO -->
                    <div class="position-relative mb-3">
                        <img 
                            src="{{ asset('img/jenny.jpg') }}" 
                            alt="Foto Profil {{ $user->name }}" 
                            class="profile-photo mx-auto d-block"
                        >
                        <span class="position-absolute top-0 end-0 translate-middle badge bg-success">
                            ✓
                        </span>
                    </div>

                    <!-- USER INFO -->
                    <h4 class="fw-semibold mb-1">{{ $user->name }}</h4>
                    <p class="text-muted mb-2">Pengguna Terdaftar</p>

                    <span class="badge bg-success mb-3">Aktif</span>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <span class="text-muted">ID Akun</span>
                        <span class="fw-semibold">#{{ $user->id }}</span>
                    </div>

                </div>
            </aside>

            <!-- MAIN CONTENT -->
            <main class="col-lg-8">

                <!-- INFORMASI PRIBADI -->
                <div class="card mb-4">
                    <div class="card-header fw-semibold">
                        📋 Informasi Pribadi
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <small class="text-muted">Nama Lengkap</small>
                                <p class="fw-semibold mb-0">{{ $user->name }}</p>
                            </div>

                            <div class="col-md-6">
                                <small class="text-muted">Email</small>
                                <p class="fw-semibold mb-0">{{ $user->email }}</p>
                            </div>

                            <div class="col-md-6">
                                <small class="text-muted">ID Pengguna</small>
                                <p class="fw-semibold mb-0">#{{ $user->id }}</p>
                            </div>

                            <div class="col-md-6">
                                <small class="text-muted">Status</small><br>
                                <span class="badge bg-success">✓ Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INFORMASI AKUN -->
                <div class="card mb-4">
                    <div class="card-header fw-semibold">
                        🔐 Informasi Akun
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <small class="text-muted">Tanggal Daftar</small>
                                <p class="fw-semibold mb-0">
                                    {{ $user->created_at->format('d M Y') }}
                                </p>
                            </div>

                            <div class="col-md-6">
                                <small class="text-muted">Waktu Daftar</small>
                                <p class="fw-semibold mb-0">
                                    {{ $user->created_at->format('H:i') }} WIB
                                </p>
                            </div>

                            <div class="col-md-6">
                                <small class="text-muted">Jenis Akun</small>
                                <p class="fw-semibold mb-0">Standar</p>
                            </div>

                            <div class="col-md-6">
                                <small class="text-muted">Verifikasi Email</small><br>
                                <span class="badge bg-success">✓ Terverifikasi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACTION BUTTON -->
                <div class="d-flex gap-3">
                    <a href="/mahasiswa" class="btn btn-primary">
                        👥 Kelola Mahasiswa
                    </a>
                    <a href="/berita" class="btn btn-secondary">
                        📰 Lihat Berita
                    </a>
                </div>

            </main>
        </div>
    </div>
</section>

@endsection
