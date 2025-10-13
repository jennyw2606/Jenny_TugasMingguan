@extends('layouts.app')

@section('title', 'Profile - MyApp')

@section('content')
<style>
  /* ==== Gaya Umum ==== */
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #fffaf4;
  }

  section.profile {
    display: flex;
    justify-content: center;
    padding: 60px 20px;
  }

  .profile-card {
    background-color: #ffffff;
    display: flex;
    align-items: center;
    gap: 30px;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    max-width: 850px;
    transition: transform 0.3s ease;
  }

  .profile-card:hover {
    transform: translateY(-6px);
  }

  .avatar {
    flex-shrink: 0;
    width: 180px;
    height: 180px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid #d2b48c;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }

  .avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .profile-info h2 {
    font-size: 1.8rem;
    margin-bottom: 5px;
    color: #8b5e3c;
  }

  .muted {
    color: #777;
    font-style: italic;
    margin-bottom: 15px;
  }

  .profile-info h4 {
    margin-top: 18px;
    margin-bottom: 6px;
    color: #a67b5b;
  }

  .profile-info p, .profile-info li {
    color: #444;
    line-height: 1.6;
  }

  .profile-list {
    list-style: none;
    padding-left: 0;
  }

  .profile-list li {
    margin-bottom: 5px;
  }

  .profile-info p:last-child {
    margin-bottom: 0;
  }

  .skills {
    margin-top: 10px;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .skill-badge {
    background-color: #d2b48c;
    color: #fff;
    padding: 6px 12px;
    border-radius: 12px;
    font-size: 0.9rem;
    font-weight: 500;
  }

  /* Responsif */
  @media (max-width: 700px) {
    .profile-card {
      flex-direction: column;
      text-align: center;
    }
    .avatar {
      width: 140px;
      height: 140px;
    }
  }
</style>

<section class="profile">
  <div class="profile-card">
    <div class="avatar">
      <img src="{{ asset(path: 'img/photo jenny.jpg') }}" alt="Foto Jenny Wulandari">
    </div>

    <div class="profile-info">
      <h2>Jenny Wulandari</h2>
      <p class="muted">Full-Stack Developer • Mahasiswa Teknologi Informasi</p>

      <h4>✨ Tentang</h4>
      <p>
        Saya seorang pengembang web yang sedang mendalami framework Laravel.  
        Proyek ini adalah bagian dari latihan routing, Blade templating, dan dasar pembuatan tampilan dinamis.  
        Saya senang menggabungkan desain sederhana dengan fungsionalitas yang efisien.
      </p>

      <h4>📞 Kontak</h4>
      <ul class="profile-list">
        <li><strong>Email:</strong> jennywulandari2606@gmail.com</li>
        <li><strong>Telepon:</strong> +62 857-8671-6092</li>
        <li><strong>Lokasi:</strong> Semarang, Indonesia</li>
      </ul>

      <h4>🧠 Skill</h4>
      <div class="skills">
        <span class="skill-badge">PHP</span>
        <span class="skill-badge">Laravel</span>
        <span class="skill-badge">HTML</span>
        <span class="skill-badge">CSS</span>
        <span class="skill-badge">JavaScript</span>
        <span class="skill-badge">MySQL</span>
      </div>
    </div>
  </div>
</section>
@endsection
