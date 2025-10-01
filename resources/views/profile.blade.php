@extends('layouts.app')

@section('title', 'Profile - MyApp')

@section('content')
<section class="profile">
  <div class="profile-card">
    <div class="avatar">JW</div>
    <div class="profile-info">
      <h2>Jenny Wulandari</h2>
      <p class="muted">Full-stack Developer / Mahasiswa TI</p>

      <h4>Tentang</h4>
      <p>Saya seorang developer yang sedang belajar Laravel. Pada project ini saya membuat halaman statis untuk latihan routing dan blade templating.</p>

      <h4>Kontak</h4>
      <ul class="profile-list">
        <li><strong>Email:</strong> jenny@example.com</li>
        <li><strong>Telepon:</strong> +62 812-3456-7890</li>
        <li><strong>Lokasi:</strong> Jakarta, Indonesia</li>
      </ul>

      <h4>Skill</h4>
      <p>PHP, Laravel, HTML, CSS, JS, MySQL</p>
    </div>
  </div>
</section>
@endsection
