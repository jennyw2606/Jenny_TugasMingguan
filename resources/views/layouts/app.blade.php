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
            background: linear-gradient(120deg,#f6f9ff,#eef2ff);
        }
        .navbar { box-shadow: 0 6px 20px rgba(0,0,0,.12); }
        .card {
            border-radius: 16px;
            border: none;
            box-shadow: 0 12px 30px rgba(0,0,0,.08);
            animation: fadeIn .4s ease;
        }
        table {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
        }
        table th {
            background: #f1f3f6;
            font-weight: 600;
            text-align: center;
        }
        tbody tr {
            transition: .25s;
        }
        tbody tr:hover {
            background: #f6f8ff;
            transform: scale(1.01);
        }
        .btn {
            border-radius: 12px;
            font-weight: 500;
            transition: .25s;
        }
        .btn-primary {
            background: linear-gradient(45deg,#4f46e5,#6366f1);
            border: none;
        }
        .btn-danger {
            background: linear-gradient(45deg,#ef4444,#f87171);
            border: none;
        }
        @keyframes fadeIn {
            from {opacity:0; transform: translateY(15px);}
            to {opacity:1; transform: translateY(0);}
        }
        footer {
            font-size: 14px;
            color: #6b7280;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/mahasiswa">🏠 CRUD Mahasiswa</a>

        <div class="ms-auto">
            <a href="/home" class="btn btn-light btn-sm me-2">Home</a>
            <a href="/mahasiswa" class="btn btn-outline-light btn-sm">Mahasiswa</a>
        </div>
    </div>
</nav>

<div class="container mb-5">
    @yield('content')
</div>

<footer class="text-center py-3">
    © {{ date('Y') }} Laravel CRUD • Praktikum
</footer>

{{-- SweetAlert SUCCESS --}}
@if (session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil 🎉',
    text: '{{ session('success') }}',
    timer: 2000,
    showConfirmButton: false
});
</script>
@endif

{{-- SweetAlert DELETE (FORM) --}}
<script>
document.querySelectorAll('.form-delete').forEach(form => {
    form.addEventListener('submit', function(e){
        e.preventDefault();

        Swal.fire({
            title: 'Yakin hapus data?',
            text: 'Data tidak bisa dikembalikan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#6b7280',
            confirmButtonText: 'Ya, hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
</script>

</body>
</html>
