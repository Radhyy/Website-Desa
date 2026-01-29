<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoris = [
            'Berita Desa',
            'Pengumuman',
            'Kegiatan',
            'Pembangunan',
            'Kesehatan',
            'Pendidikan',
            'Sosial',
            'Ekonomi',
        ];

        foreach ($kategoris as $kategori) {
            Kategori::firstOrCreate(
                ['kategori' => $kategori],
                ['user_id' => 1]
            );
        }
    }
}
