<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
{
    //ambil semua data mahasiswa
    $mahasiswas = Mahasiswa::all();
    $title = 'Data Mahasiswa';

    //kirim data ke view
    return view('datamahasiswa', compact('title', 'mahasiswas'));
}

public function tambahmahasiswa()
{
    return view('tambahmahasiswa', [
        "title" => "Tambah Data Mahasiswa"
    ]);
}

public function insertdata(Request $request)
{
    Mahasiswa::create($request->all());

    return redirect()-> route('mahasiswa')-> with('success', 'Data Berhasil Ditambahkan');
}

}
