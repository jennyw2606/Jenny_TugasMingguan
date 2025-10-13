<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/berita/{slug}', function ($slugp) {

    $data_berita = [
        "judul" => "Unimus Jaya",
        "slug" => "unimus-jaya",
        "penulis" => "Jenny W",
        "konten" => "Unimus Bergembira",
    ];

    [
    "judul" => "Berita Terkini",
    "slug"  => "berita-terkini",
    "penulis" => "Hafisa",
    "konten" => "Mukbang 20 KG Ayam Geprek",
    ];

    [
    "judul" => "Berita Viral",
    "slug"  => "berita-viral",
    "penulis" => "Amar",
    "konten" => "Unimus Juara 1 Lomba",
    ];


    $new_berita = [];

    foreach ($data_berita as $berita) 
    {
    if ($berita["slug"] === $slugp) 
    {
        $new_berita = $berita;
    }
    }

    return view('singleberita', [
    "title" => "Berita",
    "new_berita" => $new_berita,
]);
});


Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});

Route::get('/mahasiswa', function (): View {
    return view('mahasiswa');
});

Route::get('/dosen', function () {
    return view('dosen');
});

use App\Http\Controllers\NewsController;

Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('berita.show');



