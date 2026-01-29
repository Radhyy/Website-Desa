<?php

namespace Database\Seeders;

use App\Models\Situs;
use Illuminate\Database\Seeder;

class SitusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Situs::firstOrCreate(
            ['nm_desa' => 'Desa Contoh'],
            [
                'kecamatan' => 'Kecamatan Contoh',
                'kabupaten' => 'Kabupaten Contoh',
                'provinsi' => 'Provinsi Contoh',
                'kode_pos' => '12345',
                'logo' => null,
            ]
        );
    }
}
