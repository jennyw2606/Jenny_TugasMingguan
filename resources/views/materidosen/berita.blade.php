@extends('materidosen.layouts.main')

@section('content')
<h1>Daftar Berita</h1>
    @foreach ($new_berita as $berita)
    <div class="card">
        <a href="/materidosen-berita/{{ $berita['slug'] }}">
            <h2>{{ $berita['judul'] }}</h2>
        </a>
        <h4>Penulis: {{ $berita['penulis'] }}</h4>
        <p>{{ $berita['konten'] }}</p>
    </div>
    @endforeach
@endsection