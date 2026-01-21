@extends('layouts.app')

@section('title', 'Home')

@section('content')
<style>
.hero {
    background: linear-gradient(135deg, #8b5e3c, #6f4e37);
    color: #fdfaf6;
    padding: 70px 40px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 12px 30px rgba(111, 78, 55, .45);
    animation: fadeIn .6s ease;
}

.hero h1 {
    font-size: 2.6rem;
    font-weight: 700;
}

.hero p {
    font-size: 1.1rem;
    margin: 20px 0 35px;
    opacity: .95;
}

.hero a {
    background: #f3e7da;
    color: #6f4e37;
    padding: 14px 28px;
    border-radius: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: .3s;
}

.hero a:hover {
    background: #e6d3bf;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,.25);
}

.features {
    margin-top: 60px;
}

.feature-card {
    background: #fffaf4;
    border-radius: 18px;
    padding: 30px;
    box-shadow: 0 10px 25px rgba(111, 78, 55, .15);
    transition: .3s;
    height: 100%;
}

.feature-card h4 {
    color: #6f4e37;
    font-weight: 600;
}

.feature-card p {
    color: #5a4634;
}

.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(111, 78, 55, .25);
}
</style>

<div class="hero">
    <h1>👋 Selamat Datang</h1>
    <p>
        Aplikasi <strong>CRUD Mahasiswa</strong> berbasis Laravel  
        dengan desain modern dan SweetAlert
    </p>
    @auth
        <a href="/mahasiswa">📘 Masuk Data Mahasiswa</a>
    @else
        <div style="margin-top: 20px;">
            <a href="/login" style="margin-right: 10px;">🔑 Login</a>
            <a href="/register">✍️ Daftar Akun</a>
        </div>
    @endauth
</div>

<div class="row features">
    <div class="col-md-4">
        <div class="feature-card">
            <h4>🚀 Cepat</h4>
            <p>Pengelolaan data mahasiswa secara efisien dan sederhana.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="feature-card">
            <h4>🔐 Aman</h4>
            <p>Menggunakan CSRF protection & validasi Laravel.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="feature-card">
            <h4>🎨 Modern</h4>
            <p>UI Bootstrap + SweetAlert yang clean & nyaman.</p>
        </div>
    </div>
</div>
@endsection
