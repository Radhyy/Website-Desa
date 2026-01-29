<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'judul' => 'Selamat Datang di Website Desa',
                'deskripsi' => 'Portal informasi dan layanan desa yang transparan dan akuntabel',
                'img_slider' => 'slider1.jpg',
                'link_btn' => '#',
            ],
            [
                'judul' => 'Desa Bersih dan Asri',
                'deskripsi' => 'Mari bersama-sama menjaga kebersihan lingkungan desa kita',
                'img_slider' => 'slider2.jpg',
                'link_btn' => '#',
            ],
            [
                'judul' => 'Potensi Desa',
                'deskripsi' => 'Kembangkan potensi desa melalui UMKM dan pertanian',
                'img_slider' => 'slider3.jpg',
                'link_btn' => '#',
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::firstOrCreate(
                ['judul' => $slider['judul']],
                [
                    'user_id' => 1,
                    'deskripsi' => $slider['deskripsi'],
                    'img_slider' => $slider['img_slider'],
                    'link_btn' => $slider['link_btn'],
                ]
            );
        }
    }
}
