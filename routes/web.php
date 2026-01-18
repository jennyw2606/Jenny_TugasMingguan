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
