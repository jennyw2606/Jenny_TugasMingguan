<?php

namespace App\Models;

use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    private static $data_berita = [
        [
            "judul" => "Unimus Jaya",
            "slug" => "unimus-jaya",
            "penulis" => "Jenny W",
            "konten" => "Unimus Bergembira"
        ],
        [
            "judul" => "Berita Terkini",
            "slug"  => "berita-terkini",
            "penulis" => "Hafisa",
            "konten" => "Mukbang 20 KG Ayam Geprek"
        ],
        [
            "judul" => "Berita Viral",
            "slug"  => "berita-viral",
            "penulis" => "Amar",
            "konten" => "Unimus Juara 1 Lomba"
        ]
    ];

    public static function ambildata()
    {
        return self::$data_berita;
    }

    public static function caridata($slugp)
    {
        $data_beritas = self::$data_berita;
        $new_berita = [];

        foreach ($data_beritas as $berita) {
            if ($berita["slug"] === $slugp) {
                $new_berita = $berita;
            }
        }

    return $new_berita;
    }
}
