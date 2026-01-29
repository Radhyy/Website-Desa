<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@desa.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
                'foto' => null,
            ]
        );

        User::updateOrCreate(
            ['email' => 'operator@desa.com'],
            [
                'name' => 'Operator Desa',
                'password' => Hash::make('password'),
                'foto' => null,
            ]
        );
    }
}
