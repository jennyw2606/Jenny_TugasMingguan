<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Mahasiswas")->insert([
            'name' => 'Mita',
            'nim' => '21081010124',
            'prodi' => 'Informatika',
            'email' => "mita26@gmail.com",
            'nohp' => '082233445566'
        ]);
        //
    }
}
