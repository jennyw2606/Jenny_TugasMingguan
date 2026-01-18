@extends('layouts.app')

@section('title', 'Home')

@section('content')
<style>
.hero {
    background: linear-gradient(135deg,#6366f1,#4f46e5);
    color: white;
    padding: 70px 40px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 12px 30px rgba(79,70,229,.4);
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
    background: white;
    color: #4f46e5;
    padding: 14px 28px;
    border-radius: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: .3s;
}

.hero a:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,.2);
}

.features {
    margin-top: 60px;
}

.feature-card {
    background: white;
    border-radius: 18px;
    padding: 30px;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
    height: 100%;
}

.feature-card:hover {
    transform: translateY(-8px);
}
</style>

<div class="hero">
    <h1>👋 Selamat Datang</h1>
    <p>
        Aplikasi <strong>CRUD Mahasiswa</strong> berbasis Laravel  
        dengan desain modern dan SweetAlert
    </p>
    <a href="/mahasiswa">📘 Masuk Data Mahasiswa</a>
</div>

<div class="row features">
    <div class="col-md-4">
        <div class="feature-card">
            <h4>⚡ Cepat</h4>
            <p>Pengelolaan data mahasiswa secara efisien dan sederhana.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="feature-card">
            <h4>🔒 Aman</h4>
            <p>Menggunakan CSRF protection & validasi Laravel.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="feature-card">
            <h4>✨ Modern</h4>
            <p>UI Bootstrap + SweetAlert yang clean & nyaman.</p>
        </div>
    </div>
</div>
@endsection
