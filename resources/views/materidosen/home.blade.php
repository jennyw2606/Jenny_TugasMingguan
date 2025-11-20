@extends('materidosen.layouts.main')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 to-blue-100 flex flex-col items-center justify-center px-4 py-10">
    <div class="bg-white shadow-xl rounded-2xl p-10 max-w-3xl w-full text-center transition hover:shadow-2xl">
        <h1 class="text-4xl font-extrabold text-indigo-700 mb-4">
            Selamat Datang, Dosen! 🎓
        </h1>
        <p class="text-gray-600 text-lg mb-6">
            Ini adalah halaman utama untuk dosen. Gunakan menu di atas untuk mengelola materi, nilai, dan data mahasiswa.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6">
            <!-- Card 1 -->
            <div class="bg-indigo-100 rounded-xl p-6 hover:bg-indigo-200 transition">
                <h2 class="text-xl font-semibold text-indigo-800 mb-2">📚 Materi</h2>
                <p class="text-gray-700 text-sm">Kelola dan unggah materi perkuliahan dengan mudah.</p>
                <a href="{{ url('/materidosen/materi') }}" class="inline-block mt-3 text-indigo-700 font-semibold hover:underline">
                    Lihat Materi →
                </a>
            </div>

            <!-- Card 2 -->
            <div class="bg-blue-100 rounded-xl p-6 hover:bg-blue-200 transition">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">🧾 Nilai</h2>
                <p class="text-gray-700 text-sm">Input dan pantau nilai mahasiswa dengan cepat.</p>
                <a href="{{ url('/materidosen/nilai') }}" class="inline-block mt-3 text-blue-700 font-semibold hover:underline">
                    Kelola Nilai →
                </a>
            </div>

            <!-- Card 3 -->
            <div class="bg-teal-100 rounded-xl p-6 hover:bg-teal-200 transition">
                <h2 class="text-xl font-semibold text-teal-800 mb-2">👩‍🎓 Mahasiswa</h2>
                <p class="text-gray-700 text-sm">Lihat daftar dan data mahasiswa yang Anda bimbing.</p>
                <a href="{{ url('/materidosen/mahasiswa') }}" class="inline-block mt-3 text-teal-700 font-semibold hover:underline">
                    Lihat Data →
                </a>
            </div>
        </div>

        <div class="mt-10 text-sm text-gray-500">
            © {{ date('Y') }} Sistem Informasi Akademik Dosen
        </div>
    </div>
</div>
@endsection
