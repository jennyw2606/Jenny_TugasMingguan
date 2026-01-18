<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
<<<<<<< HEAD
        'nama',
=======
        'name',
>>>>>>> fa552da3051801d23630e272f41918a73c82a8aa
        'nim',
        'prodi',
        'email',
        'nohp',
    ];
}
