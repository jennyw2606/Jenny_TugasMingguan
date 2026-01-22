<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'CRUD Mahasiswa')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f9f2ea, #f1e2d1);
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(45deg, #9c6b4f, #b4835a);
            box-shadow: 0 6px 18px rgba(156, 107, 79, .35);
        }

        /* Card */
        .card {
            border-radius: 16px;
            border: none;
            background: linear-gradient(180deg, #ffffff, #f9f1e8);
            box-shadow: 0 12px 28px rgba(156, 107, 79, .18);
            animation: fadeIn .4s ease;
        }

        /* Table */
        table {
            background: linear-gradient(180deg, #fffdf9, #f3e6d8);
            border-radius: 14px;
            overflow: hidden;
        }

        table th {
            background: linear-gradient(45deg, #b4835a, #9c6b4f);
            color: white;
            text-align: center;
        }

        tbody tr:hover {
            background: #efe0cf;
            transform: scale(1.01);
        }

        /* Button */
        .btn {
            border-radius: 12px;
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(45deg, #9c6b4f, #b4835a);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #8b5d44, #a87452);
        }

        .btn-danger {
            background: linear-gradient(45deg, #c46b4a, #e08a66);
            border: none;
        }

        /* FOTO PROFIL */
        .profile-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #b4835a;
            box-shadow: 0 6px 16px rgba(156, 107, 79, .35);
        }

        footer {
            font-size: 14px;
            color: #7a4f37;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">🤎 CRUD Mahasiswa</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="ms-auto d-flex gap-2 align-items-center">
                @auth
                    <a href="/mahasiswa" class="btn btn-light btn-sm">Mahasiswa</a>
                    <a href="/berita" class="btn btn-light btn-sm">Berita</a>
                    <a href="/profile" class="btn btn-light btn-sm">👤 Profil</a>
                    <a href="/contact" class="btn btn-light btn-sm">📞 Contact</a>

                    <div class="dropdown">
                        <button class="btn btn-outline-light btn-sm dropdown-toggle" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">🚪 Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="/" class="btn btn-light btn-sm">Home</a>
                    <a href="/login" class="btn btn-outline-light btn-sm">Login</a>
                    <a href="/register" class="btn btn-light btn-sm">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mb-5">
    @yield('content')
</div>

<!-- FOOTER -->
<footer class="text-center py-3">
    © {{ date('Y') }} Laravel CRUD • Praktikum
</footer>

@if (session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil 🎉',
    text: '{{ session('success') }}',
    timer: 2000,
    showConfirmButton: false,
    background: '#fffdf9',
    color: '#7a4f37'
});
</script>
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
