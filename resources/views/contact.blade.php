@extends('layouts.app')

@section('title', 'Contact - MyApp')

@section('content')
<section class="contact">
  <h1>Hubungi Kami</h1>

  <div class="contact-grid">
    <div class="contact-card">
      <h3>Informasi Kontak</h3>
      <p>Jika ada pertanyaan, silakan hubungi melalui detail berikut:</p>
      <ul class="contact-list">
        <li><strong>Email:</strong> jenny@example.com</li>
        <li><strong>Telepon:</strong> +62 812-3456-7890</li>
        <li><strong>Alamat:</strong> Jl. Contoh No. 123, Jakarta</li>
      </ul>
    </div>

    <div class="contact-card">
      <h3>Kirim Pesan</h3>
      <!-- form hanya simulasi; JavaScript di layout menangani submit -->
      <form id="contact-form">
        <label>Nama
          <input type="text" name="name" placeholder="Nama lengkap" required>
        </label>

        <label>Email
          <input type="email" name="email" placeholder="email@contoh.com" required>
        </label>

        <label>Pesan
          <textarea name="message" rows="5" placeholder="Tulis pesan..." required></textarea>
        </label>

        <button type="submit" class="btn">Kirim Pesan</button>
      </form>
    </div>
  </div>
</section>
@endsection
