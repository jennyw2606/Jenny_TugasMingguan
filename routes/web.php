<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('profile', function () {
    return 'profile';
});
Route::get('berita', function () {
    return 'berita';
});
Route::get('contact', function () {
    return 'contact';
});
