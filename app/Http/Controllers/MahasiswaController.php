<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // TAMPIL DATA
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswas'));
    }

    // FORM TAMBAH
    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa');
    }

    // SIMPAN DATA
    public function insertdata(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'nim'   => 'required|numeric|unique:mahasiswa,nim',
            'prodi' => 'required',
            'email' => 'required|email|unique:mahasiswa,email',
            'nohp'  => 'required'
        ]);

        Mahasiswa::create([
            'name'  => $request->name,
            'nim'   => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'nohp'  => $request->nohp,
        ]);

        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    // FORM EDIT
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('editmahasiswa', compact('mahasiswa'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'nim'   => 'required|numeric|unique:mahasiswa,nim,' . $id,
            'prodi' => 'required',
            'email' => 'required|email|unique:mahasiswa,email,' . $id,
            'nohp'  => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update([
            'name'  => $request->name,
            'nim'   => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'nohp'  => $request->nohp,
        ]);

        return redirect('/mahasiswa')->with('success', 'Data berhasil diupdate!');
    }

    // HAPUS DATA
    public function deletedata($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus!');
    }


}
