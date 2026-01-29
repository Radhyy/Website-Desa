<?php

namespace Database\Seeders;

use App\Models\VideoProfil;
use Illuminate\Database\Seeder;

class VideoProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VideoProfil::updateOrCreate(
            ['id' => 1],
            [
            'judul' => 'Profil Desa',
            'deskripsi' => 'Video profil desa yang menampilkan potensi dan keindahan desa',
            'url_video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', // Ganti dengan URL video yang sesuai
            ]
        );
    }
}
