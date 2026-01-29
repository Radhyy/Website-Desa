<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisiMisi::updateOrCreate(
            ['id' => 1],
            [
            'visi' => 'Terwujudnya Desa yang Maju, Mandiri, dan Sejahtera berdasarkan Gotong Royong dan Kearifan Lokal',
            'misi' => '1. Meningkatkan kualitas pelayanan publik kepada masyarakat
2. Mengembangkan potensi ekonomi desa berbasis pertanian dan UMKM
3. Meningkatkan kualitas pendidikan dan kesehatan masyarakat
4. Membangun infrastruktur desa yang memadai
5. Melestarikan nilai-nilai budaya dan kearifan lokal
6. Menciptakan tata kelola pemerintahan desa yang baik dan bersih',
            ]
        );
    }
}
