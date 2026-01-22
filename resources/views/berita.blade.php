@extends('layouts.app')

@section('title', 'Berita & Update - MyApp')

@section('content')
<style>
  /* Gaya keseluruhan halaman */
  .news {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    padding: 2rem;
    background: #faf7f4;
    color: #333;
  }

  .news main {
    flex: 2;
  }

  .news aside {
    flex: 1;
    background: #fff;
    padding: 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    height: fit-content;
  }

  .news h1 {
    font-size: 2rem;
    margin-bottom: .5rem;
  }

  .tagline {
    color: #777;
    margin-bottom: 2rem;
  }

  /* Pencarian & filter */
  .filter-bar {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
  }

  .filter-bar input, .filter-bar select {
    padding: .6rem .8rem;
    border: 1px solid #ccc;
    border-radius: .5rem;
    width: 100%;
    max-width: 200px;
  }

  /* Item berita */
  .news-item {
    background: #fff;
    border-radius: 1rem;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .news-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
  }

  .news-item h2 {
    margin-bottom: .3rem;
  }

  .meta {
    font-size: .9rem;
    color: #888;
    margin-bottom: .7rem;
  }

  .readmore a {
    color: #b5835a;
    font-weight: bold;
    text-decoration: none;
  }

  .readmore a:hover {
    text-decoration: underline;
  }

  /* Sidebar populer */
  .popular-list li {
    margin-bottom: 1rem;
  }

  .popular-list a {
    color: #333;
    text-decoration: none;
  }

  .popular-list a:hover {
    color: #b5835a;
  }
</style>

<section class="news">
  <main>
    <h1>Berita Terbaru & Inspirasi</h1>
    <p class="tagline">Dapatkan kabar terkini, tips teknologi, dan kisah dari komunitas MyApp.</p>

    <!-- Filter dan pencarian -->
    <div class="filter-bar">
      <input type="text" id="searchNews" placeholder="Cari berita...">
      <select id="filterCategory">
        <option value="all">Semua Kategori</option>
        <option value="update">Update Produk</option>
        <option value="tutorial">Tutorial</option>
        <option value="event">Event</option>
        <option value="inspirasi">Inspirasi</option>
      </select>
    </div>

    <!-- Daftar berita -->
    @forelse($beritas as $berita)
    <article class="news-item">
      <h2>{{ $berita['judul'] }}</h2>
      <div class="meta">Ditulis oleh <strong>{{ $berita['penulis'] }}</strong></div>
      <p>{{ $berita['konten'] }}</p>
      <p class="readmore"><a href="/berita/{{ $berita['slug'] }}">Baca Selengkapnya →</a></p>
    </article>
    @empty
    <article class="news-item">
      <p style="color: #999; text-align: center;">📰 Tidak ada berita untuk ditampilkan</p>
    </article>
    @endforelse
  </main>

  <!-- Sidebar -->
  <aside>
    <h3>Berita Populer</h3>
    <ul class="popular-list">
      @foreach($beritas as $berita)
      <li><a href="/berita/{{ $berita['slug'] }}">{{ $berita['judul'] }}</a></li>
      @endforeach
    </ul>
  </aside>
</section>

@endsection
