<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;

// Halaman Utama
Route::get('/', function () {
    return view('home');
});

// Fitur Login/Register
Auth::routes();

// Route Group untuk Mahasiswa (Harus Login)
Route::middleware('auth')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambahmahasiswa']);
    Route::post('/mahasiswa/simpan', [MahasiswaController::class, 'insertdata']);
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
    Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
    Route::post('/mahasiswa/delete/{id}', [MahasiswaController::class, 'deletedata']);
});

// Route Berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);

// Route Umum
Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});

Route::get('/dosen', function () {
    return view('dosen');
});

// =================== Bagian Materi Dosen ==================
Route::get('/materidosen', function () {
    return view('welcome');
});

Route::get('/materidosen-home', function () {
    return view('materidosen.home', ["title" => "Home"]);
});

Route::get('/materidosen-profile', function () {
    return view('materidosen.profile', ["title" => "Profile"]);
});

Route::get('/materidosen-berita', function () {
    return view('materidosen.berita', [
        "title" => "Berita",
        "new_berita" => Berita::ambildata()
    ]);
});

Route::get('/materidosen-about', function () {
    return view('materidosen.about', ["title" => "About"]);
});

Route::get('/materidosen/{slug}', function ($slugp) {
    return view('materidosen.singleberita', [
        "title" => "Berita",
        "berita" => (object) Berita::caridata($slugp) 
    ]);
});