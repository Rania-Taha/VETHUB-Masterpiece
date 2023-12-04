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
        DB::table('users')->insert([
            [
                'first_name' => 'Razan',             
                'last_name' => 'Rjoub',
                'email' => 'razan_rjoub1@gmail.com',
                'password' => Hash::make('RBt-12345'),
                'image' => 'assets\img\razan.jpg',
                'role' => 'user'
            ]
        ]);
        DB::table('users')->insert([
            [
                'first_name' => 'Rama',             
                'last_name' => 'Ababneh',
                'email' => 'ababneh.rama@gmail.com',
                'password' => Hash::make('RBt-12345'),
                'image' => 'assets\img\rama.jpg',
                'role' => 'user'
            ]
        ]);
        DB::table('users')->insert([
            [
                'first_name' => 'Leena',             
                'last_name' => 'Rababah',
                'email' => 'leena_ababneh@gmail.com',
                'password' => Hash::make('RBt-12345'),
                'image' => 'assets\img\leena.png',
                'role' => 'user'
            ]
        ]);
        DB::table('users')->insert([
            [
                'first_name' => 'Lama',             
                'last_name' => 'Nazzal',
                'email' => 'lama.nazzal@gmail.com',
                'password' => Hash::make('RBt-12345'),
                'image' => 'assets\img\lama1.jpg',
                'role' => 'user'
            ]
        ]);

    }
}


