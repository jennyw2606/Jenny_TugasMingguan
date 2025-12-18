<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('name');          // Nama
            $table->string('nim')->unique(); // NIM
            $table->string('prodi');         // Program Studi
            $table->string('email')->unique(); // Email
            $table->string('nohp');          // Nomor Handphone
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
