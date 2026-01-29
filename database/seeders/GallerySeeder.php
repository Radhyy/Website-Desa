<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'judul' => 'Gotong Royong Desa',
                'deskripsi' => 'Kegiatan gotong royong membersihkan lingkungan desa',
                'gambar' => 'gotong-royong.jpg',
            ],
            [
                'judul' => 'Kantor Desa',
                'deskripsi' => 'Gedung kantor desa yang baru',
                'gambar' => 'kantor-desa.jpg',
            ],
            [
                'judul' => 'Balai Desa',
                'deskripsi' => 'Balai desa untuk kegiatan masyarakat',
                'gambar' => 'balai-desa.jpg',
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::firstOrCreate(
                ['judul' => $gallery['judul']],
                $gallery
            );
        }
    }
}
