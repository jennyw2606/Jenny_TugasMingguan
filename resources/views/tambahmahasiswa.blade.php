@extends('layouts.main');

@section('title', 'Tambah Data Mahasiswa')
<h1> Tambah Data Mahasiswa</h1> 
<div class="card">
    <div class="card-body">
    <form action="/insertdata" method="POST" encypte="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="name" id="nama" placeholder="Nama Lengkap" class="form-control"> 
    </div>
    <div class="mb-3">
        <label for="for" class="form-label">NIM</label>
        <input type="number" name="nim" id="nim" class="form-control">
    </div>
    <div class="mb-3 form-check">
        <label for="prodi" class="form-label">Prpgram Studi</label>
        <input type="text" name="prodi" id="prodi" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="mb-3 form-check">
        <label for="nohp" class="form-label">Nonomor Handphone</label>
        <input type="number" name="nohp" id="nphp" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

@section('content')