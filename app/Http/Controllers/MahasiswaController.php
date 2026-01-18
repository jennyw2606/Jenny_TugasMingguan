<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
<<<<<<< HEAD
    // ==============================
    // TAMPIL DATA
    // ==============================
=======
    // TAMPIL DATA
>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswas'));
    }

<<<<<<< HEAD
    // ==============================
    // FORM TAMBAH
    // ==============================
=======
    // FORM TAMBAH
>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa
    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa');
    }

<<<<<<< HEAD
    // ==============================
    // SIMPAN DATA
    // ==============================
    public function insertdata(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'nim'   => 'required|numeric|unique:mahasiswa,nim',
            'prodi' => 'required',
            'email' => 'required|email',
            'nohp'  => 'required',
        ]);

        Mahasiswa::create([
            'nama'  => $request->nama,
=======
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
>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa
            'nim'   => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'nohp'  => $request->nohp,
        ]);

<<<<<<< HEAD
        return redirect('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    // ==============================
    // FORM EDIT
    // ==============================
    public function tampildata($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('edit', compact('mahasiswa')); // ⬅️ FIX NAMA VIEW
    }

    // ==============================
    // UPDATE DATA
    // ==============================
    public function editdata(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required',
            'nim'   => 'required|numeric|unique:mahasiswa,nim,' . $id,
            'prodi' => 'required',
            'email' => 'required|email',
            'nohp'  => 'required',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nama'  => $request->nama,
=======
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
>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa
            'nim'   => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'nohp'  => $request->nohp,
        ]);

<<<<<<< HEAD
        return redirect('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil diupdate');
    }

    // ==============================
    // DELETE
    // ==============================
    public function delete($id)
    {
        Mahasiswa::findOrFail($id)->delete();

        return redirect('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil dihapus');
    }
=======
        return redirect('/mahasiswa')->with('success', 'Data berhasil diupdate!');
    }

    // HAPUS DATA
    public function deletedata($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus!');
    }


>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa
}
