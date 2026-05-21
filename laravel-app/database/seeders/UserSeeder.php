<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Surabaya',
            'email' => 'surabaya@nadi.id',
            'password' => Hash::make('password'),
            'hospital_id' => 1,
        ]);

        User::create([
            'name' => 'Admin Jakarta',
            'email' => 'jakarta@nadi.id',
            'password' => Hash::make('password'),
            'hospital_id' => 2,
        ]);

        User::create([
            'name' => 'Admin Bandung',
            'email' => 'bandung@nadi.id',
            'password' => Hash::make('password'),
            'hospital_id' => 3,
        ]);
    }
}