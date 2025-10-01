@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')
<section class="hero">
  <h1>Selamat datang di MyApp</h1>
  <p class="lead">Contoh project Laravel sederhana — halaman Home, Profile, Berita, dan Contact.</p>
  <p><a href="{{ url('berita') }}" class="btn">Lihat Berita Terbaru</a></p>
</section>

<section class="features">
  <div class="card-group">
    <article class="card">
      <h3>Profil</h3>
      <p>Lihat informasi singkat tentang pemilik aplikasi, kemampuan, dan kontak.</p>
      <p><a href="{{ url('profile') }}" class="link">Buka Profil →</a></p>
    </article>

    <article class="card">
      <h3>Berita</h3>
      <p>Daftar artikel & pengumuman. Cocok untuk menampilkan content dinamis nantinya.</p>
      <p><a href="{{ url('berita') }}" class="link">Baca Berita →</a></p>
    </article>

    <article class="card">
      <h3>Contact</h3>
      <p>Form sederhana untuk menghubungi pemilik website (simulasi tanpa backend mail).</p>
      <p><a href="{{ url('contact') }}" class="link">Hubungi Kami →</a></p>
    </article>
  </div>
</section>
@endsection
