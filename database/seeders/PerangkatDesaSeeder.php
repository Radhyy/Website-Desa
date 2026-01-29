<?php

namespace Database\Seeders;

use App\Models\PerangkatDesa;
use Illuminate\Database\Seeder;

class PerangkatDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perangkat = [
            ['nama' => 'Kepala Desa', 'jabatan' => 'Kepala Desa', 'foto' => 'kades.jpg'],
            ['nama' => 'Sekretaris Desa', 'jabatan' => 'Sekretaris Desa', 'foto' => 'sekdes.jpg'],
            ['nama' => 'Kaur Keuangan', 'jabatan' => 'Kepala Urusan Keuangan', 'foto' => 'kaur-keuangan.jpg'],
            ['nama' => 'Kaur Umum', 'jabatan' => 'Kepala Urusan Umum', 'foto' => 'kaur-umum.jpg'],
            ['nama' => 'Kaur Pembangunan', 'jabatan' => 'Kepala Urusan Pembangunan', 'foto' => 'kaur-pembangunan.jpg'],
            ['nama' => 'Kasi Pemerintahan', 'jabatan' => 'Kepala Seksi Pemerintahan', 'foto' => 'kasi-pemerintahan.jpg'],
            ['nama' => 'Kasi Kesejahteraan', 'jabatan' => 'Kepala Seksi Kesejahteraan', 'foto' => 'kasi-kesejahteraan.jpg'],
            ['nama' => 'Kasi Pelayanan', 'jabatan' => 'Kepala Seksi Pelayanan', 'foto' => 'kasi-pelayanan.jpg'],
        ];

        foreach ($perangkat as $data) {
            PerangkatDesa::firstOrCreate(
                ['jabatan' => $data['jabatan']],
                [
                    'user_id' => 1,
                    'nama' => $data['nama'],
                    'foto' => $data['foto'],
                ]
            );
        }
    }
}
