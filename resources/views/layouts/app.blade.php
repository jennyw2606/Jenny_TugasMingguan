<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'MyApp')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <div class="logo"><a href="{{ url('/') }}">My<span class="logo-accent">App</span></a></div>
      <nav class="main-nav">
        <a href="{{ url('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a>
        <a href="{{ url('profile') }}" class="{{ Request::is('profile') ? 'active' : '' }}">Profile</a>
        <a href="{{ url('berita') }}" class="{{ Request::is('berita') ? 'active' : '' }}">Berita</a>
        <a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
      </nav>
    </div>
  </header>

  <main class="container">
    @yield('content')
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>&copy; {{ date('Y') }} MyApp. Dibuat dengan Laravel.</p>
    </div>
  </footer>

  <script>
    // Simple contact form "simulasi kirim"
    document.addEventListener('DOMContentLoaded', function(){
      var form = document.getElementById('contact-form');
      if(form){
        form.addEventListener('submit', function(e){
          e.preventDefault();
          var name = form.querySelector('[name="name"]').value.trim();
          var email = form.querySelector('[name="email"]').value.trim();
          var message = form.querySelector('[name="message"]').value.trim();
          if(!name || !email || !message){
            alert('Lengkapi semua field terlebih dahulu.');
            return;
          }
          alert('Pesan berhasil dikirim! (simulasi)\\nTerima kasih, ' + name + ' 🙂');
          form.reset();
        });
      }
    });
  </script>
</body>
</html>
