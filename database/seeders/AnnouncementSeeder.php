<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $announcements = [
            [
                'judul' => 'Pengumuman Pembagian BLT',
                'konten' => 'Kepada seluruh warga penerima Bantuan Langsung Tunai (BLT), diharapkan untuk mengambil bantuan pada tanggal 20-25 Desember 2025 di Kantor Desa dengan membawa KTP asli dan KK.',
                'tanggal_mulai' => now(),
                'tanggal_selesai' => now()->addDays(10),
                'user_id' => 1,
            ],
            [
                'judul' => 'Rapat RT/RW Bulanan',
                'konten' => 'Mengundang seluruh ketua RT dan RW untuk menghadiri rapat koordinasi bulanan yang akan dilaksanakan pada hari Rabu, 18 Desember 2025 pukul 19.00 WIB di Balai Desa.',
                'tanggal_mulai' => now(),
                'tanggal_selesai' => now()->addDays(5),
                'user_id' => 1,
            ],
            [
                'judul' => 'Kegiatan Gotong Royong',
                'konten' => 'Dihimbau kepada seluruh warga untuk berpartisipasi dalam kegiatan gotong royong pembersihan lingkungan desa yang akan dilaksanakan pada hari Minggu, 22 Desember 2025 pukul 07.00 WIB. Tempat kumpul di Balai Desa.',
                'tanggal_mulai' => now(),
                'tanggal_selesai' => now()->addDays(7),
                'user_id' => 1,
            ],
            [
                'judul' => 'Pelayanan Administrasi Tutup Sementara',
                'konten' => 'Pelayanan administrasi kependudukan di kantor desa akan tutup pada tanggal 25 Desember 2025 dalam rangka Hari Natal. Pelayanan akan kembali normal pada tanggal 26 Desember 2025.',
                'tanggal_mulai' => now(),
                'tanggal_selesai' => now()->addDays(15),
                'user_id' => 1,
            ],
        ];

        foreach ($announcements as $announcement) {
            Announcement::firstOrCreate(
                ['judul' => $announcement['judul']],
                $announcement
            );
        }
    }
}
