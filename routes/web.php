<?php

use App\http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

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


Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class,'tampildata']);

Route::get('/mahasiswa', [MahasiswaController::class, 'tampildata']);
Route::get('/tambahmahasiswa', [MahasiswaController::class,'tambahmahasiswa']);

Route::get('/insertdata', [MahasiswaController::class,'insertdata']);

Route::get('datamahasiswa', [MahasiswaController::class,'index']);

Route::get('/tampildata/{id}', [MahasiswaController::class,'tampildata'])->name('tampildata');
Route::post('/edit data/{id}', [MahasiswaController::class, 'editdata'])->name('editdata');

Route::post('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');
    

Route::get('/materidosen/{slug}', function ($slugp) {
    return view('materidosen.singleberita', [
        "title" => "Berita",
        "berita" => (object) Berita::caridata($slugp) 
    ]);
});


Route::get('/materidosen-about', function () {
    return view('materidosen.about', [
    "title" => "About"
    ]);
});

Route::get('/materidosen-about', function () {});

// ====== ROUTE MAHASISWA ====== //
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa']);
Route::post('/insertdata', [MahasiswaController::class, 'insertdata']);

Route::get('/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata']);





