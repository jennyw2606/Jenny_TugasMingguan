<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dosen</title>
</head>
<div>
    <h1>Data Mahasiswa</h1>
    <p>Halaman ini berisi informasi tentang data mahasiswa</p>
    <p>Website ini dibuat untuk latihan Laravel sesuai materi perkuliahan</p> <br>
    <button type="button" class="btn btn-succes">Tambah Data</button>
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</t>
                <th scope="col">Name</th>
                <th scope="col">NIM</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
    <tbody>
    @foreach ($data as $mahasiswa)
            <tr>
                <th scope="row">1</th>
                <td>{{ $mahasiswa }}</td>
                <td>1324242221</td>
                <td>Gizi</td>
                <td>jeje@gmail.com</td>
                <td>082233445566</td>
            <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Hapus</button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
