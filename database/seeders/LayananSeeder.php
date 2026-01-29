<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanans = [
            [
                'layanan' => 'Surat Keterangan Domisili',
                'persyaratan' => '- Fotocopy KTP
- Fotocopy KK
- Surat Pengantar RT/RW',
            ],
            [
                'layanan' => 'Surat Keterangan Usaha',
                'persyaratan' => '- Fotocopy KTP
- Fotocopy KK
- Surat Pengantar RT/RW
- Foto tempat usaha',
            ],
            [
                'layanan' => 'Surat Keterangan Tidak Mampu',
                'persyaratan' => '- Fotocopy KTP
- Fotocopy KK
- Surat Pengantar RT/RW
- Surat Keterangan dari RT bahwa benar-benar tidak mampu',
            ],
            [
                'layanan' => 'Surat Pengantar KTP',
                'persyaratan' => '- Fotocopy KK
- Surat Pengantar RT/RW
- Pas foto 3x4 sebanyak 2 lembar',
            ],
            [
                'layanan' => 'Surat Pengantar Nikah',
                'persyaratan' => '- Fotocopy KTP calon pengantin
- Fotocopy KK
- Fotocopy Akta Kelahiran
- Surat Pengantar RT/RW
- Pas foto 3x4 sebanyak 2 lembar',
            ],
        ];

        foreach ($layanans as $layanan) {
            Layanan::firstOrCreate(
                ['layanan' => $layanan['layanan']],
                [
                    'user_id' => 1,
                    'persyaratan' => $layanan['persyaratan'],
                ]
            );
        }
    }
}
