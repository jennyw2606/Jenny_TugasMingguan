@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<div class="container mx-auto py-5">
    <h2 class="text-3xl font-bold mb-4">{{ $berita->judul }}</h2>
    <p class="text-gray-500 mb-2">Ditulis oleh: {{ $berita->penulis ?? 'Admin' }} | {{ $berita->tanggal ?? date('d M Y') }}</p>
    
    @if($berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="rounded-lg shadow mb-4 w-full max-h-[400px] object-cover">
    @endif

    <div class="text-lg leading-relaxed">
        {!! nl2br(e($berita->konten)) !!}
    </div>

    <a href="{{ route('berita.index') }}" class="inline-block mt-6 text-blue-600 hover:underline">← Kembali ke daftar berita</a>
</div>
@endsection