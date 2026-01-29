<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pekerjaans = [
            'Petani',
            'Buruh Tani',
            'Nelayan',
            'Pedagang',
            'Wiraswasta',
            'PNS',
            'TNI/Polri',
            'Guru',
            'Dokter',
            'Bidan',
            'Perawat',
            'Karyawan Swasta',
            'Pengrajin',
            'Peternak',
            'Sopir',
            'Montir',
            'Tukang Kayu',
            'Tukang Batu',
            'Buruh Harian Lepas',
            'Ibu Rumah Tangga',
            'Pelajar/Mahasiswa',
            'Belum/Tidak Bekerja',
            'Pensiunan',
            'Lainnya',
        ];

        foreach ($pekerjaans as $pekerjaan) {
            Pekerjaan::firstOrCreate(['pekerjaan' => $pekerjaan]);
        }
    }
}
