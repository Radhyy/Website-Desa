<?php

namespace Database\Seeders;

use App\Models\JenisKelamin;
use Illuminate\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisKelamin = [
            'Laki-laki',
            'Perempuan',
        ];

        foreach ($jenisKelamin as $jk) {
            JenisKelamin::firstOrCreate(['jenis_kelamin' => $jk]);
        }
    }
}
