<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritas = [
            [
                'judul' => 'Selamat Datang di Website Desa',
                'body' => '<p>Website resmi desa kami telah resmi diluncurkan. Melalui website ini, masyarakat dapat mengakses berbagai informasi terkait kegiatan, pengumuman, dan layanan desa dengan lebih mudah dan cepat.</p>',
                'kategori_id' => 1,
            ],
            [
                'judul' => 'Gotong Royong Membersihkan Lingkungan Desa',
                'body' => '<p>Kegiatan gotong royong membersihkan lingkungan desa dilaksanakan setiap hari Minggu pagi. Seluruh warga diharapkan dapat berpartisipasi aktif dalam menjaga kebersihan lingkungan desa kita.</p>',
                'kategori_id' => 3,
            ],
            [
                'judul' => 'Program Bantuan Sosial untuk Warga Kurang Mampu',
                'body' => '<p>Pemerintah desa menyalurkan bantuan sosial kepada warga kurang mampu sebagai bentuk kepedulian terhadap kesejahteraan masyarakat. Bantuan berupa sembako dan uang tunai telah disalurkan kepada 100 KK.</p>',
                'kategori_id' => 7,
            ],
        ];

        foreach ($beritas as $berita) {
            Berita::firstOrCreate(
                ['judul' => $berita['judul']],
                [
                    'user_id' => 1,
                    'kategori_id' => $berita['kategori_id'],
                    'status_id' => 2, // Published
                    'body' => $berita['body'],
                    'excerpt' => strip_tags(substr($berita['body'], 0, 150)),
                    'gambar' => null,
                    'views' => rand(10, 100),
                ]
            );
        }
    }
}
