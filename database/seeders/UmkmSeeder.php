<?php

namespace Database\Seeders;

use App\Models\Umkm;
use Illuminate\Database\Seeder;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $umkms = [
            [
                'produk' => 'Keripik Singkong',
                'deskripsi' => 'Keripik singkong dengan berbagai varian rasa yang renyah dan gurih',
                'harga' => 25000,
                'no_hp' => '081234567890',
                'foto' => 'keripik.jpg',
            ],
            [
                'produk' => 'Batik Tulis',
                'deskripsi' => 'Batik tulis dengan motif khas daerah yang berkualitas tinggi',
                'harga' => 350000,
                'no_hp' => '081234567891',
                'foto' => 'batik.jpg',
            ],
            [
                'produk' => 'Madu Hutan',
                'deskripsi' => 'Madu hutan murni yang dipanen langsung dari hutan',
                'harga' => 75000,
                'no_hp' => '081234567892',
                'foto' => 'madu.jpg',
            ],
            [
                'produk' => 'Anyaman Bambu',
                'deskripsi' => 'Berbagai produk anyaman bambu seperti tas, tempat nasi, dan hiasan',
                'harga' => 50000,
                'no_hp' => '081234567893',
                'foto' => 'anyaman.jpg',
            ],
        ];

        foreach ($umkms as $umkm) {
            Umkm::firstOrCreate(
                ['produk' => $umkm['produk']],
                [
                    'user_id' => 1,
                    'deskripsi' => $umkm['deskripsi'],
                    'harga' => $umkm['harga'],
                    'no_hp' => $umkm['no_hp'],
                    'foto' => $umkm['foto'],
                ]
            );
        }
    }
}
