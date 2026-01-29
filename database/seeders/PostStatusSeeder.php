<?php

namespace Database\Seeders;

use App\Models\PostStatus;
use Illuminate\Database\Seeder;

class PostStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            'Draft',
            'Published',
        ];

        foreach ($statuses as $status) {
            PostStatus::firstOrCreate(['status' => $status]);
        }
    }
}
