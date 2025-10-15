<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/berita', function () {
    return view('berita');
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


/// =================== Bagian Materi Dosen ==================

Route::get('/materidosen', function () {
    return view('welcome');
});

Route::get('/materidosen-home', function () {
    return view('materidosen.home', [
    "title" => "Home"
    ]);
});

Route::get('/materidosen-profile', function () {
    return view('materidosen.profile', [
    "title" => "Profile"
    ]);
});

Route::get('/materidosen-berita', function () {
    return view('materidosen.berita', [
    "title" => "Berita",
    "new_berita" => Berita::ambildata()
    ]);
});

Route::get('/materidosen/{slug}', function ($slugp) {
    return view('materidosen.singleberita', [
    "title" => "Berita",
    "new_berita" => Berita::caridata($slugp)
    ]);
});

Route::get('/materidosen-about', function () {
    return view('materidosen.about', [
    "title" => "About"
    ]);
});



