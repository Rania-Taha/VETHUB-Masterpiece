<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import statement


class ClinicVetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clinic_vets')->insert([
            'name' => 'Dr. Abdallah Salah',
            'position' => 'Veterinarian',
            'image' => 'http://127.0.0.1:8000/assets/img/moh.jpg',
            'clinic_id' => '2',
        ]);
        DB::table('clinic_vets')->insert([
            'name' => 'Raghad Alomari',
            'position' => 'Veterinarian',
            'image' => 'http://127.0.0.1:8000/assets/img/raghad.jpg',
            'clinic_id' => '2',
        ]);
        DB::table('clinic_vets')->insert([
            'name' => 'Dr. Saba Rihani',
            'position' => 'Veterinarian',
            'image' => 'http://127.0.0.1:8000/assets/img/dr.saba.jpg',
            'clinic_id' => '2',
        ]);
        DB::table('clinic_vets')->insert([
            'name' => 'Mohammad Z. Okour',
            'position' => 'Veterinarian',
            'image' => 'http://127.0.0.1:8000/assets/img/mohammad.jpg',
            'clinic_id' => '1',
        ]);
    }
}
