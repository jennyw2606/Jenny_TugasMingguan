<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aplikasi Mahasiswa')</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/mahasiswa">S1 Teknologi Informasi</a>
        <div>
            <a href="/mahasiswa" class="btn btn-outline-light btn-sm">Mahasiswa</a>
            <a href="/tambahmahasiswa" class="btn btn-outline-light btn-sm">Tambah</a>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
