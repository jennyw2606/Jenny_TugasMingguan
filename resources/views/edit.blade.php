@extends('layouts.main');

@section('title', 'Edit Data Mahasiswa')
<h1> Edit Data Mahasiswa</h1> 
<div class="card">
    <div class="card-body">
    <form action="/editdata/" method="POST" encypte="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="name" id="nama" value="{{ $data->name }}" placeholder="Nama Lengkap" class="form-control"> 
    </div>
    <div class="mb-3">
        <label for="for" class="form-label">NIM</label>
        <input type="number" name="nim" id="nim" value="{{ $data->nim }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Prpgram Studi</label>
        <input type="text" name="prodi" id="prodi" value="{{ $data->prodi }}" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" value="{{ $data->email }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="nohp" class="form-label">Nonomor Handphone</label>
        <input type="number" name="nohp" id="nohp" class="form-control"
        value="{{ $data->nohp }}" id="nohp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

@section('content')