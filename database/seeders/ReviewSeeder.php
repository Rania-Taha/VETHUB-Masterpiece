<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import statement


class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '1',
                'user_id' => '3',             
                'review_text' => 'Exceptional care for my furry friend! The staff here is incredibly compassionate and knowledgeable.',
                'rating' => '5'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '1',
                'user_id' => '4',             
                'review_text' => 'Decent service, but the waiting time was longer than expected. The vet was friendly and provided good care, but the reception area seemed a bit disorganized. The clinic itself appeared clean, and the staff was helpful. Improvement needed in managing appointments.',
                'rating' => '3'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '1',
                'user_id' => '5',             
                'review_text' => 'I can not thank This clinic enough! My dog had an emergency, and they accommodated us immediately. ',
                'rating' => '5'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '2',
                'user_id' => '6',             
                'review_text' => 'I can not thank This clinic enough! My dog had an emergency, and they accommodated us immediately. ',
                'rating' => '5'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '2',
                'user_id' => '7',             
                'review_text' => 'I can not thank This clinic enough! My dog had an emergency, and they accommodated us immediately. ',
                'rating' => '5'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '3',
                'user_id' => '6',             
                'review_text' => 'I can not thank This clinic enough! My dog had an emergency, and they accommodated us immediately. ',
                'rating' => '5'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '4',
                'user_id' => '7',             
                'review_text' => 'I can not thank This clinic enough! My dog had an emergency, and they accommodated us immediately. ',
                'rating' => '5'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '4',
                'user_id' => '5',             
                'review_text' => 'I can not thank This clinic enough! My dog had an emergency, and they accommodated us immediately. ',
                'rating' => '5'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '5',
                'user_id' => '6',             
                'review_text' => 'I can not thank This clinic enough! My dog had an emergency, and they accommodated us immediately. ',
                'rating' => '3'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '6',
                'user_id' => '4',             
                'review_text' => 'I can not thank This clinic enough! My dog had an emergency, and they accommodated us immediately. ',
                'rating' => '4'
            ]
        ]);
        DB::table('reviews')->insert([
            [
                'clinic_id'=> '4',
                'user_id' => '5',             
                'review_text' => 'I can not thank This clinic enough! My dog had an emergency, and they accommodated us immediately. ',
                'rating' => '4'
            ]
        ]);
    }
}
