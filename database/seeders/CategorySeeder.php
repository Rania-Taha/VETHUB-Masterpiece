<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import statement


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Veterinary Clinics',
            'short_description' => 'Book an appointment
            for your furry animal in one of our special Veterinary Clinics. ',
            'long_description' =>'Discover a network of trusted and reliable veterinary clinics dedicated to providing exceptional care for your beloved pets.

            Our verified clinics are staffed by experienced veterinarians and offer a wide range of services to keep your furry friends happy and healthy.',

            'image' => 'assets\img\clinic.JPG',
        ]);
        DB::table('categories')->insert([
            'name' => 'Ask A Vet',
            'short_description' => 'Need advice but don’t have a veterinarian you can speak with? We’ve got you covered.',
            'long_description' =>'
            Book with confidence Free chat or Charged Video call appointments to help you manage your pets health.
            VetHub connects pet owners to licensed veterinarians ready to provide the best online vet services through Free chat or Video call appointments 24/7. ',
            'image' => 'assets\img\doc.JPG',

        ]);
       
    }
}
