<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import statement


class ClinicServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clinic_services')->insert([
            'service_name' => 'Wellness Exams',
            'image' => 'https://kindanimalcarefl.com/wp-content/uploads/2020/08/iconfinder_stetoscope-vet-pet_5413414.png',
            'description' =>'We rovide regular wellness examinations or checkups. A wellness examination includes an evaluation of all of your pet’s major organ systems.',
            'clinic_id' =>'1',
        ]);
        DB::table('clinic_services')->insert([
            'service_name' => 'Wellness Exams',
            'image' => 'https://kindanimalcarefl.com/wp-content/uploads/2020/08/iconfinder_stetoscope-vet-pet_5413414.png',
            'description' =>'We rovide regular wellness examinations or checkups. A wellness examination includes an evaluation of all of your pet’s major organ systems.',
            'clinic_id' =>'2',
        ]);
        DB::table('clinic_services')->insert([
            'service_name' => 'Surgery',
            'image' => 'https://cdn4.iconfinder.com/data/icons/animals-1-6/48/bl_10220_surgery_animal_veterinary-1024.png',
            'description' =>'We rovide a wide range of surgical services. From routine surgical procedures, such as spaying and neutering, to more complex surgeries',
            'clinic_id' =>'1',
        ]);  DB::table('clinic_services')->insert([
            'service_name' => 'Surgery',
            'image' => 'https://cdn4.iconfinder.com/data/icons/animals-1-6/48/bl_10220_surgery_animal_veterinary-1024.png',
            'description' =>'We rovide a wide range of surgical services. From routine surgical procedures, such as spaying and neutering, to more complex surgeries',
            'clinic_id' =>'2',
        ]);
        DB::table('clinic_services')->insert([
            'service_name' => 'Vaccinations',
            'image' => 'https://media.istockphoto.com/vectors/pet-vaccination-icon-logo-of-animal-chipping-vector-id1270369073?k=6&m=1270369073&s=612x612&w=0&h=1cQtNa2GNBsirumQz3sld2P6JMpAPjm98RtxaPxnCjM=',
            'description' =>'Our doctors and other staff members are well-educated about veterinary vaccines, and our goal is to give you the best advice .',
            'clinic_id' =>'1',
        ]);
        DB::table('clinic_services')->insert([
            'service_name' => 'Vaccinations',
            'image' => 'https://media.istockphoto.com/vectors/pet-vaccination-icon-logo-of-animal-chipping-vector-id1270369073?k=6&m=1270369073&s=612x612&w=0&h=1cQtNa2GNBsirumQz3sld2P6JMpAPjm98RtxaPxnCjM=',
            'description' =>'Our doctors and other staff members are well-educated about veterinary vaccines, and our goal is to give you the best advice .',
            'clinic_id' =>'2',
        ]);
        DB::table('clinic_services')->insert([
            'service_name' => 'Pet Grooming',
            'image' => 'https://th.bing.com/th/id/OIP.ieJBHp4L4HM88nuND-5GEAAAAA?pid=ImgDet&rs=1',
            'description' =>'Our trained professionals provide grooming services that typically include bathing, brushing, trimming, and nail clipping for your pets.  .',
            'clinic_id' =>'1',
        ]);
        DB::table('clinic_services')->insert([
            'service_name' => 'Pet Grooming',
            'image' => 'https://th.bing.com/th/id/OIP.ieJBHp4L4HM88nuND-5GEAAAAA?pid=ImgDet&rs=1',
            'description' =>'Our trained professionals provide grooming services that typically include bathing, brushing, trimming, and nail clipping for your pets. .',
            'clinic_id' =>'2',
        ]);
        DB::table('clinic_services')->insert([
            'service_name' => 'Pet Grooming',
            'image' => 'https://th.bing.com/th/id/OIP.ieJBHp4L4HM88nuND-5GEAAAAA?pid=ImgDet&rs=1',
            'description' =>'Our trained professionals provide grooming services that typically include bathing, brushing, trimming, and nail clipping for your pets. .',
            'clinic_id' =>'3',
        ]);
        DB::table('clinic_services')->insert([
            'service_name' => 'Pet Grooming',
            'image' => 'https://th.bing.com/th/id/OIP.ieJBHp4L4HM88nuND-5GEAAAAA?pid=ImgDet&rs=1',
            'description' =>'Our trained professionals provide grooming services that typically include bathing, brushing, trimming, and nail clipping for your pets.  .',
            'clinic_id' =>'3',
        ]);
    }
}
