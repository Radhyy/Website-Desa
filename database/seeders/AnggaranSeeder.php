<?php

namespace Database\Seeders;

use App\Models\Anggaran;
use App\Models\User;
use Illuminate\Database\Seeder;

class AnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::first();
        $tahun = '2025';

        // Pendapatan Desa
        $pendapatan = [
            [
                'kategori' => 'Pendapatan Asli Desa',
                'items' => [
                    ['uraian' => 'Hasil Usaha Desa', 'jumlah' => 50000000],
                    ['uraian' => 'Hasil Aset Desa', 'jumlah' => 25000000],
                    ['uraian' => 'Swadaya, Partisipasi dan Gotong Royong', 'jumlah' => 30000000],
                    ['uraian' => 'Lain-lain Pendapatan Asli Desa', 'jumlah' => 15000000],
                ]
            ],
            [
                'kategori' => 'Transfer',
                'items' => [
                    ['uraian' => 'Dana Desa', 'jumlah' => 800000000],
                    ['uraian' => 'Alokasi Dana Desa (ADD)', 'jumlah' => 600000000],
                    ['uraian' => 'Bagi Hasil Pajak dan Retribusi', 'jumlah' => 75000000],
                    ['uraian' => 'Bantuan Keuangan Provinsi', 'jumlah' => 100000000],
                    ['uraian' => 'Bantuan Keuangan Kabupaten/Kota', 'jumlah' => 150000000],
                ]
            ],
            [
                'kategori' => 'Pendapatan Lain-lain',
                'items' => [
                    ['uraian' => 'Hibah dan Sumbangan Pihak Ketiga', 'jumlah' => 50000000],
                    ['uraian' => 'Lain-lain Pendapatan Desa Yang Sah', 'jumlah' => 25000000],
                ]
            ],
        ];

        foreach ($pendapatan as $kategoriData) {
            foreach ($kategoriData['items'] as $item) {
                Anggaran::firstOrCreate(
                    [
                        'tahun' => $tahun,
                        'jenis' => 'Pendapatan',
                        'kategori' => $kategoriData['kategori'],
                        'uraian' => $item['uraian'],
                    ],
                    [
                        'user_id' => $admin->id,
                        'jumlah' => $item['jumlah'],
                    ]
                );
            }
        }

        // Belanja Desa
        $belanja = [
            [
                'kategori' => 'Bidang Penyelenggaraan Pemerintahan Desa',
                'items' => [
                    ['uraian' => 'Penghasilan Tetap dan Tunjangan Kepala Desa', 'jumlah' => 60000000],
                    ['uraian' => 'Penghasilan Tetap dan Tunjangan Perangkat Desa', 'jumlah' => 180000000],
                    ['uraian' => 'Tunjangan BPD', 'jumlah' => 45000000],
                    ['uraian' => 'Operasional Perkantoran', 'jumlah' => 80000000],
                    ['uraian' => 'Operasional BPD', 'jumlah' => 25000000],
                    ['uraian' => 'Kegiatan Administrasi Pemerintahan Desa', 'jumlah' => 40000000],
                ]
            ],
            [
                'kategori' => 'Bidang Pelaksanaan Pembangunan Desa',
                'items' => [
                    ['uraian' => 'Pembangunan Jalan Desa', 'jumlah' => 350000000],
                    ['uraian' => 'Pembangunan Jembatan Desa', 'jumlah' => 150000000],
                    ['uraian' => 'Pembangunan Saluran Irigasi', 'jumlah' => 100000000],
                    ['uraian' => 'Pengadaan Sarana Prasarana Desa', 'jumlah' => 80000000],
                    ['uraian' => 'Pembangunan Gedung/Prasarana Desa', 'jumlah' => 120000000],
                ]
            ],
            [
                'kategori' => 'Bidang Pembinaan Kemasyarakatan',
                'items' => [
                    ['uraian' => 'Kegiatan Pembinaan Ketentraman dan Ketertiban', 'jumlah' => 30000000],
                    ['uraian' => 'Pembinaan Kerukunan Umat Beragama', 'jumlah' => 25000000],
                    ['uraian' => 'Pengadaan Sarana Prasarana Olahraga', 'jumlah' => 40000000],
                    ['uraian' => 'Pembinaan Lembaga Adat', 'jumlah' => 20000000],
                    ['uraian' => 'Pembinaan PKK', 'jumlah' => 35000000],
                ]
            ],
            [
                'kategori' => 'Bidang Pemberdayaan Masyarakat',
                'items' => [
                    ['uraian' => 'Pelatihan Usaha Ekonomi Produktif', 'jumlah' => 50000000],
                    ['uraian' => 'Pelatihan Teknologi Tepat Guna', 'jumlah' => 40000000],
                    ['uraian' => 'Pembinaan UMKM/UEP', 'jumlah' => 60000000],
                    ['uraian' => 'Peningkatan Kapasitas Aparatur Desa', 'jumlah' => 30000000],
                ]
            ],
            [
                'kategori' => 'Bidang Penanggulangan Bencana, Darurat dan Mendesak',
                'items' => [
                    ['uraian' => 'Penanggulangan Bencana', 'jumlah' => 50000000],
                    ['uraian' => 'Kegiatan Keadaan Darurat', 'jumlah' => 30000000],
                    ['uraian' => 'Kegiatan Mendesak Lainnya', 'jumlah' => 25000000],
                ]
            ],
        ];

        foreach ($belanja as $kategoriData) {
            foreach ($kategoriData['items'] as $item) {
                Anggaran::firstOrCreate(
                    [
                        'tahun' => $tahun,
                        'jenis' => 'Belanja',
                        'kategori' => $kategoriData['kategori'],
                        'uraian' => $item['uraian'],
                    ],
                    [
                        'user_id' => $admin->id,
                        'jumlah' => $item['jumlah'],
                    ]
                );
            }
        }

        $this->command->info('APBDes seeder completed successfully!');
    }
}
