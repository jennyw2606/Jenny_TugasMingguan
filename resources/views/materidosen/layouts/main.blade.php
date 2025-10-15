<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Dosen Demo' }}</title>
    <link rel="stylesheet" href="{{ asset('dosen/css/style.css') }}">
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <h1 class="logo">DosenDemo</h1>
            <div class="nav-links">
                <a href="/materidosen-home" class="{{ $title === 'Home' ? 'active' : '' }}">Home</a>
                <a href="/materidosen-berita" class="{{ $title === 'Berita' ? 'active' : '' }}">Berita</a>
                <a href="/materidosen-profile" class="{{ $title === 'Profile' ? 'active' : '' }}">Profile</a>
                <a href="/materidosen-about" class="{{ $title === 'About' ? 'active' : '' }}">About</a>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="content-container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; {{ date('Y') }} DosenDemo App. All rights reserved.</p>
    </footer>
</body>