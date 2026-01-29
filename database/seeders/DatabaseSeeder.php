<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AgamaSeeder::class,
            JenisKelaminSeeder::class,
            PekerjaanSeeder::class,
            PostStatusSeeder::class,
            UserSeeder::class,
            SitusSeeder::class,
            KontakSeeder::class,
            KategoriSeeder::class,
            BeritaSeeder::class,
            WilayahSeeder::class,
            PerangkatDesaSeeder::class,
            VisiMisiSeeder::class,
            SejarahSeeder::class,
            LayananSeeder::class,
            SliderSeeder::class,
            GallerySeeder::class,
            UmkmSeeder::class,
            VideoProfilSeeder::class,
            PetaSeeder::class,
            AnnouncementSeeder::class,
        ]);
    }
}
