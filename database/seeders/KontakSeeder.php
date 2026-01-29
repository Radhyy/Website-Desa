<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kontak::updateOrCreate(
            ['id' => 1],
            [
                'lokasi' => 'Jl. Raya Desa No. 1, Desa Contoh, Kecamatan Contoh, Kabupaten Contoh',
                'email' => 'info@desacontoh.id',
                'no_hp' => '081234567890',
            ]
        );
    }
}
