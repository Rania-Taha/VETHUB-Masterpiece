<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import statement
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'admin',             
                'last_name' => ' ',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'image' => 'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
                'role' => 'admin'
            ]
        ]);

        DB::table('users')->insert([
            [
                'first_name' => 'provider',             
                'last_name' => ' ',
                'email' => 'provider@gmail.com',
                'password' => Hash::make('password'),
                'image' => 'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
                'role' => 'provider',
                'clinic_id' => '1',
            ]
        ]);
        DB::table('users')->insert([
            [
                'first_name' => 'Rania',             
                'last_name' => 'Taha',
                'email' => 'rania_taha105@gmail.com',
                'password' => Hash::make('RBt-12345'),
                'image' => 'assets\img\avatar-girl.jpg',
                'role' => 'user'
            ]
        ]);
    }
}


