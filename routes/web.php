<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/', function () {
    return 'halaman profile';
});
Route::get('/', function () {
    return 'halaman berita';
});
Route::get('/', function () {
    return 'halaman kontak';
});
