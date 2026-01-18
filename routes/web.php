<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambahmahasiswa']);
    Route::post('/mahasiswa/simpan', [MahasiswaController::class, 'insertdata']);
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'tampildata']);
    Route::post('/mahasiswa/{id}/edit', [MahasiswaController::class, 'editdata']);
    Route::post('/mahasiswa/{id}/delete', [MahasiswaController::class, 'delete']);
});
<<<<<<< HEAD
=======

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





>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa
