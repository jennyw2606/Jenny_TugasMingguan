<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => \App\Models\Berita::ambildata()
        ]);
    }

    public function tampildata($slugp) {

    return view('materidosen.singleberita', [
    "title" => "Berita",
    "new_berita" => Berita::caridata($slugp)
    ]);

    }
    
}
