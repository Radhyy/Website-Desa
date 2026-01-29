<?php

namespace Database\Seeders;

use App\Models\Sejarah;
use Illuminate\Database\Seeder;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sejarah::updateOrCreate(
            ['id' => 1],
            [
            'judul' => 'Sejarah Desa',
            'konten' => 'Desa ini didirikan pada tahun 1945 oleh para pendiri desa yang merupakan tokoh masyarakat setempat. Awalnya desa ini merupakan bagian dari desa induk yang kemudian berkembang menjadi desa definitif. 

Nama desa diambil dari nama pohon besar yang tumbuh di tengah desa dan menjadi tempat berkumpul masyarakat. Seiring berjalannya waktu, desa ini terus berkembang dengan berbagai pembangunan infrastruktur dan peningkatan kesejahteraan masyarakat.

Pada tahun 1980, desa ini mulai mengembangkan sektor pertanian sebagai mata pencaharian utama masyarakat. Kemudian pada tahun 2000-an, mulai berkembang sektor UMKM dan pariwisata yang menjadi potensi unggulan desa.',
            ]
        );
    }
}
