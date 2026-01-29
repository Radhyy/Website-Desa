<?php

namespace Database\Seeders;

use App\Models\Wilayah;
use Illuminate\Database\Seeder;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wilayahs = [
            ['nama_wilayah' => 'RW 01', 'kepala_wilayah' => 'Bapak Slamet', 'jumlah_kk' => 150, 'jumlah_penduduk' => 600],
            ['nama_wilayah' => 'RW 02', 'kepala_wilayah' => 'Bapak Joko', 'jumlah_kk' => 120, 'jumlah_penduduk' => 480],
            ['nama_wilayah' => 'RW 03', 'kepala_wilayah' => 'Bapak Budi', 'jumlah_kk' => 180, 'jumlah_penduduk' => 720],
            ['nama_wilayah' => 'RW 04', 'kepala_wilayah' => 'Bapak Ahmad', 'jumlah_kk' => 140, 'jumlah_penduduk' => 560],
        ];

        foreach ($wilayahs as $wilayah) {
            Wilayah::firstOrCreate(
                ['nama_wilayah' => $wilayah['nama_wilayah']],
                $wilayah
            );
        }
    }
}
