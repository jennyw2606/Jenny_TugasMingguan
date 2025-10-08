@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')
<style>
  /* ==== Gaya Umum ==== */
  body {
    font-family: 'Poppins', sans-serif;
  }

  section.hero {
    background: linear-gradient(135deg, #d2b48c, #c7a17a);
    color: #fff;
    padding: 60px;
    border-radius: 16px;
    text-align: center;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    animation: fadeIn 1s ease-in-out;
  }

  .hero h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    letter-spacing: 1px;
  }

  .hero p.lead {
    font-size: 1.1rem;
    margin-bottom: 25px;
    color: #f5f5f5;
  }

  .hero .btn {
    background-color: #8b5e3c;
    color: #fff;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
  }

  .hero .btn:hover {
    background-color: #704b2a;
    transform: scale(1.05);
  }

  /* ==== Fitur Section ==== */
  section.features {
    background-color: #fff8f2;
    padding: 50px;
    border-radius: 16px;
    margin-top: 30px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.05);
    text-align: center;
    animation: slideUp 1s ease-in-out;
  }

  .features h2 {
    font-size: 2rem;
    color: #8b5e3c;
    margin-bottom: 30px;
  }

  .card-group {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
  }

  .card {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 25px;
    width: 300px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: left;
  }

  .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  }

  .card h3 {
    color: #8b5e3c;
    margin-bottom: 10px;
  }

  .card p {
    color: #555;
    font-size: 0.95rem;
    margin-bottom: 15px;
  }

  .link {
    color: #a67b5b;
    text-decoration: none;
    font-weight: bold;
  }

  .link:hover {
    text-decoration: underline;
  }

  /* ==== Animasi ==== */
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes slideUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>

<section class="hero">
  <h1>Selamat Datang di <strong>Laravel Jenny</strong> 🌸</h1>
  <p class="lead">Eksplorasi proyek Laravel sederhana dengan desain lembut dan modern — berisi halaman Home, Profil, Berita, dan Contact.</p>
  <a href="{{ url('berita') }}" class="btn">📢 Baca Berita Terbaru</a>
</section>

<section class="features">
  <h2>✨ Jelajahi Fitur Menarik</h2>

  <div class="card-group">
    <article class="card">
      <h3>👩‍💻 Profil</h3>
      <p>Kenali pemilik aplikasi lebih dekat. Tersedia informasi singkat, keahlian, dan kontak pribadi.</p>
      <p><a href="{{ url('profile') }}" class="link">Buka Profil →</a></p>
    </article>

    <article class="card">
      <h3>📰 Berita</h3>
      <p>Temukan artikel, pengumuman, serta update terbaru dari komunitas dan proyek Laravel Jenny.</p>
      <p><a href="{{ url('berita') }}" class="link">Lihat Berita →</a></p>
    </article>

    <article class="card">
      <h3>📬 Contact</h3>
      <p>Kirim pesan, saran, atau pertanyaan dengan form kontak sederhana. Kami siap mendengar darimu!</p>
      <p><a href="{{ url('contact') }}" class="link">Hubungi Kami →</a></p>
    </article>
  </div>
</section>
@endsection
