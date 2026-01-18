<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // ==============================
    // TAMPIL DATA
    // ==============================
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswas'));
    }

    // ==============================
    // FORM TAMBAH
    // ==============================
    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa');
    }

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
            'nim'   => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'nohp'  => $request->nohp,
        ]);

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
            'nim'   => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'nohp'  => $request->nohp,
        ]);

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
}
