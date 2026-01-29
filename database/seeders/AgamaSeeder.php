<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agamas = [
            'Islam',
            'Kristen',
            'Katolik',
            'Hindu',
            'Buddha',
            'Konghucu',
        ];

        foreach ($agamas as $agama) {
            Agama::firstOrCreate(['agama' => $agama]);
        }
    }
}
