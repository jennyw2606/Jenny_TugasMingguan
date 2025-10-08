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
    <article class="news-item" data-category="update">
      <h2>🚀 Rilis MyApp Versi 2.0</h2>
      <div class="meta" data-date="2025-10-06">Diposting oleh Tim Dev • <span class="timeago"></span></div>
      <p>MyApp kini tampil dengan desain baru, fitur dark mode, serta peningkatan performa yang signifikan.</p>
      <p><strong>Kategori:</strong> Update Produk</p>
      <p class="readmore"><a href="#">Baca Selengkapnya →</a></p>
    </article>

    <article class="news-item" data-category="tutorial">
      <h2>💡 Panduan Membuat API dengan Laravel</h2>
      <div class="meta" data-date="2025-09-30">Ditulis oleh Kontributor Tamu • <span class="timeago"></span></div>
      <p>Pelajari cara membangun API menggunakan Laravel mulai dari routing, controller, hingga testing endpoint.</p>
      <p><strong>Kategori:</strong> Tutorial</p>
      <p class="readmore"><a href="#">Pelajari Sekarang →</a></p>
    </article>

    <article class="news-item" data-category="event">
      <h2>🎉 Gathering MyApp Community 2025</h2>
      <div class="meta" data-date="2025-09-15">Admin • <span class="timeago"></span></div>
      <p>Lebih dari 100 peserta hadir dalam gathering tahunan dengan sesi mentoring, sharing, dan workshop Laravel.</p>
      <p><strong>Kategori:</strong> Event</p>
      <p class="readmore"><a href="#">Lihat Dokumentasi →</a></p>
    </article>

    <article class="news-item" data-category="inspirasi">
      <h2>🌱 Kisah di Balik Tim MyApp</h2>
      <div class="meta" data-date="2025-09-01">Editor • <span class="timeago"></span></div>
      <p>Dari ide kecil hingga jadi platform belajar coding yang ramai digunakan oleh pelajar dan developer muda.</p>
      <p><strong>Kategori:</strong> Inspirasi</p>
      <p class="readmore"><a href="#">Baca Kisahnya →</a></p>
    </article>
  </main>

  <!-- Sidebar -->
  <aside>
    <h3>Berita Populer</h3>
    <ul class="popular-list">
      <li><a href="#">10 Tips Laravel untuk Pemula</a></li>
      <li><a href="#">Cara Deploy MyApp ke Hosting Gratis</a></li>
      <li><a href="#">Mengenal Fitur Livewire di Laravel</a></li>
    </ul>
    <hr>
    <h3>Langganan Update</h3>
    <p>Dapatkan notifikasi setiap kali ada berita baru.</p>
    <input type="email" placeholder="Masukkan email kamu">
    <button style="margin-top:10px;padding:.5rem 1rem;border:none;background:#b5835a;color:#fff;border-radius:.5rem;cursor:pointer;">Langganan</button>
  </aside>
</section>

<script>
  // Pencarian berita
  document.getElementById('searchNews').addEventListener('input', function() {
    const query = this.value.toLowerCase();
    document.querySelectorAll('.news-item').forEach(item => {
      const text = item.innerText.toLowerCase();
      item.style.display = text.includes(query) ? '' : 'none';
    });
  });

  // Filter kategori
  document.getElementById('filterCategory').addEventListener('change', function() {
    const selected = this.value;
    document.querySelectorAll('.news-item').forEach(item => {
      item.style.display = (selected === 'all' || item.dataset.category === selected) ? '' : 'none';
    });
  });

  // Fitur waktu otomatis
  document.querySelectorAll('.timeago').forEach(span => {
    const date = new Date(span.parentElement.getAttribute('data-date'));
    const diff = Math.floor((new Date() - date) / (1000 * 60 * 60 * 24));
    span.textContent = diff === 0 ? 'hari ini' : `${diff} hari yang lalu`;
  });
</script>
@endsection
