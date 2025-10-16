@extends('materidosen.layouts.main')

@section('content')
    <article>
        <h1>{{ $new_berita['judul'] }}</h1>
        <h3>Penulis: {{ $new_berita['penulis'] }}</h3>
        <p>{{ $new_berita['konten'] }}</p>
    </article>

    <a href="/materidosen-berita">← Kembali</a>
@endsection