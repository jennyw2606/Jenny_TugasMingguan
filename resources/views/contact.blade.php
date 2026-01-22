@extends('layouts.app')

@section('title', 'Contact - MyApp')

@section('content')

<section class="contact">
  <div class="contact-header">
    <h1>📞 Hubungi Kami</h1>
    <p>Kami siap membantu menjawab pertanyaan Anda</p>
  </div>

  <div class="contact-container">
    <div class="contact-grid">
      <!-- Contact Information -->
      <div class="contact-card info-card">
        <div class="card-icon">📧</div>
        <h3>Informasi Kontak</h3>
        <p class="card-desc">Hubungi kami melalui berbagai saluran komunikasi berikut:</p>
        
        <div class="info-list">
          <div class="info-item">
            <span class="info-icon">✉️</span>
            <div class="info-content">
              <strong>Email</strong>
              <p>jennywulandari2606@gmail.com</p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon">📱</span>
            <div class="info-content">
              <strong>Telepon</strong>
              <p>+62 857-8671-6092</p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon">📍</span>
            <div class="info-content">
              <strong>Lokasi</strong>
              <p>Jl. Gemah Sari, Semarang, Indonesia</p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon">⏰</span>
            <div class="info-content">
              <strong>Jam Operasional</strong>
              <p>Senin - Jumat: 08:00 - 17:00 WIB</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-card form-card">
        <div class="card-icon">✏️</div>
        <h3>Kirim Pesan</h3>
        <p class="card-desc">Isi formulir di bawah dan kami akan segera menghubungi Anda</p>
        
        <form id="contact-form" class="contact-form">
          <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input 
              type="text" 
              id="name"
              name="name" 
              class="form-control"
              placeholder="Masukkan nama Anda" 
              required
            >
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input 
              type="email" 
              id="email"
              name="email" 
              class="form-control"
              placeholder="contoh@email.com" 
              required
            >
          </div>

          <div class="form-group">
            <label for="subject">Subjek</label>
            <input 
              type="text" 
              id="subject"
              name="subject" 
              class="form-control"
              placeholder="Subjek pesan Anda" 
              required
            >
          </div>

          <div class="form-group">
            <label for="message">Pesan</label>
            <textarea 
              id="message"
              name="message" 
              class="form-control"
              rows="5" 
              placeholder="Tulis pesan Anda di sini..." 
              required
            ></textarea>
          </div>

          <button type="submit" class="btn-submit">
            <span>📤 Kirim Pesan</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
