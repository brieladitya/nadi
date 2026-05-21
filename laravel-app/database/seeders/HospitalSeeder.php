<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    public function run(): void
    {
        Hospital::create([
            'hospital_name' => 'RS Surabaya',
            'hospital_code' => 'RSSBY',
            'city' => 'Surabaya',
            'address' => 'Surabaya',
        ]);

        Hospital::create([
            'hospital_name' => 'RS Jakarta',
            'hospital_code' => 'RSJKT',
            'city' => 'Jakarta',
            'address' => 'Jakarta',
        ]);

        Hospital::create([
            'hospital_name' => 'RS Bandung',
            'hospital_code' => 'RSBDG',
            'city' => 'Bandung',
            'address' => 'Bandung',
        ]);
    }
}