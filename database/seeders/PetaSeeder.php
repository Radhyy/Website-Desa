<?php

namespace Database\Seeders;

use App\Models\Peta;
use Illuminate\Database\Seeder;

class PetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peta::firstOrCreate(
            ['id' => 1],
            [
                'judul' => 'Peta Lokasi Desa',
                'alamat' => 'Desa Watu Pari, Kecamatan Komba Utara, Kabupaten Manggarai Timur, Nusa Tenggara Timur'
            ]
        );
    }
}
