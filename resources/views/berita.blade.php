@extends('layouts.app')

@section('title', 'Berita - MyApp')

@section('content')
<section class="news">
  <h1>Berita & Pengumuman</h1>

  <article class="news-item">
    <h2>Peluncuran Versi 1.0</h2>
    <div class="meta">10 September 2025 — Admin</div>
    <p>Kami dengan senang hati mengumumkan rilis versi 1.0 aplikasi. Versi ini berisi fitur dasar seperti halaman profil, daftar berita, dan form kontak.</p>
    <p class="readmore"><a href="#">Baca selengkapnya →</a></p>
  </article>

  <article class="news-item">
    <h2>Tips Belajar Laravel</h2>
    <div class="meta">5 September 2025 — Admin</div>
    <p>Mulailah dengan memahami routing, controller, dan blade. Praktikkan dengan membuat page sederhana seperti pada contoh proyek ini.</p>
    <p class="readmore"><a href="#">Baca selengkapnya →</a></p>
  </article>

  <article class="news-item">
    <h2>Event Coding Lokal</h2>
    <div class="meta">1 September 2025 — Admin</div>
    <p>Ada event meetup developer minggu depan. Cocok untuk bertemu senior developer dan belajar praktik terbaik Laravel.</p>
    <p class="readmore"><a href="#">Baca selengkapnya →</a></p>
  </article>
</section>
@endsection
