<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // 🔹 TAMPILKAN DATA
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswas'));
    }

    // 🔹 FORM TAMBAH
    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa');
    }

    // 🔹 SIMPAN DATA BARU
    public function insertdata(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric|unique:mahasiswa',
            'kelas' => 'required',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('datamahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    // 🔹 FORM EDIT
    public function edit($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('editmahasiswa', compact('mhs'));
    }

    // 🔹 UPDATE DATA
    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->update($request->all());
        return redirect()->route('datamahasiswa')->with('success', 'Data berhasil diperbarui!');
    }

    // 🔹 HAPUS DATA
    public function delete($id)
    {
        Mahasiswa::destroy($id);
        return redirect()->route('datamahasiswa')->with('success', 'Data berhasil dihapus!');
    }

    public function deletedata($id)
    {
        $data = Mahasiswa::find($id);

        $data->delete();
        return redirect()->route('mahasiswa')->with('success', 'Data berhasil dihapus!');
    }
}