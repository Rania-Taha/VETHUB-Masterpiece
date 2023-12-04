<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import statement


class WorkingHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('working_hours')->insert([
            'day' => 'Saturday',
            'start_at' => '10:00am ',
            'ends_at' =>'10:00pm',
            'clinic_id' => '1',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Sunday',
            'start_at' => '10:00am ',
            'ends_at' =>'10:00pm',
            'clinic_id' => '1',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Monday',
            'start_at' => '10:00am ',
            'ends_at' =>'10:00pm',
            'clinic_id' => '1',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Tuesday',
            'start_at' => '10:00am ',
            'ends_at' =>'10:00pm',
            'clinic_id' => '1',
        ]);DB::table('working_hours')->insert([
            'day' => 'Wednesday',
            'start_at' => '10:00am ',
            'ends_at' =>'10:00pm',
            'clinic_id' => '1',
        ]);DB::table('working_hours')->insert([
            'day' => 'Thursday',
            'start_at' => '10:00am ',
            'ends_at' =>'10:00pm',
            'clinic_id' => '1',
        ]);DB::table('working_hours')->insert([
            'day' => 'Saturday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '2',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Sunday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '2',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Monday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '2',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Tuesday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '2',
        ]);DB::table('working_hours')->insert([
            'day' => 'Wednesday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '2',
        ]);DB::table('working_hours')->insert([
            'day' => 'Thursday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '2',
        ]);DB::table('working_hours')->insert([
            'day' => 'Friday',
            'start_at' => '02:00pc ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '2',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Saturday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '3',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Sunday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '3',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Monday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '3',
        ]);
        DB::table('working_hours')->insert([
            'day' => 'Tuesday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '3',
        ]);DB::table('working_hours')->insert([
            'day' => 'Wednesday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '3',
        ]);DB::table('working_hours')->insert([
            'day' => 'Thursday',
            'start_at' => '10:00am ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '3',
        ]);DB::table('working_hours')->insert([
            'day' => 'Friday',
            'start_at' => '02:00pc ',
            'ends_at' =>'08:00pm',
            'clinic_id' => '3',
        ]);

    }
}
