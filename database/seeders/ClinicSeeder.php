<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import statement


class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clinics')->insert([
            'name' => 'Treaty pet clinic',
            'image' => 'http://127.0.0.1:8000/assets/img/treaty.jpg',
            'location' => ' Al-youssefi Circle, Irbid',
            'description' =>'hi',
            'about' =>'Our team of veterinary professionals works together to ensure that your pet’s needs are provided for at all times. We prioritize your pet long-term health by focusing on preventive services. You will love our highly skilled, compassionate veterinarians. We offer a comprehensive range of services under one roof.',
            'location_map' =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.9211595540446!2d35.8712270244412!3d32.528252573768576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c77d2c80b055b%3A0x31a19a00b823380e!2sTreaty%20pets%20clinic!5e0!3m2!1sar!2sjo!4v1696307711413!5m2!1sar!2sjo" width="100%" height="480px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
        DB::table('clinics')->insert([
            'name' => 'Pure eyes pets clinic',
            'image' => 'https://th.bing.com/th/id/OIP.qtt4pnz5ObBC7KwadyU2pAHaHe?pid=ImgDet&rs=1',
            'location' => 'Rateb Al-Battayenah Street, Irbid',
            'description' =>'hi',
            'about' =>'Our team of veterinary professionals works together to ensure that your pet’s needs are provided for at all times. We prioritize your pet long-term health by focusing on preventive services. You will love our highly skilled, compassionate veterinarians. We offer a comprehensive range of services under one roof.',
            'location_map' =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.175179156767!2d35.86231902444032!3d32.548169673760086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c7690094c2e6d%3A0xa25ad160dfbed70e!2zUHVyZSBFeWVzIC0gUGV0cyBDbGluaWMgLSDYqNmK2YrZiNixINij2YrYstiy!5e0!3m2!1sar!2sjo!4v1696307690099!5m2!1sar!2sjo" width="100%" height="480px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
        DB::table('clinics')->insert([
            'name' => 'Laika pet care center',
            'image' => 'http://127.0.0.1:8000/frontend/images/clinics/laika.jpg',
            'location' => 'Rateb Al-Battayenah Street, Irbid',
            'description' =>'hi',
            'about' =>'Our team of veterinary professionals works together to ensure that your pet’s needs are provided for at all times. We prioritize your pet long-term health by focusing on preventive services. You will love our highly skilled, compassionate veterinarians. We offer a comprehensive range of services under one roof.',
            'location_map' =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d932.2928815053349!2d35.871662490784324!3d32.521600493368126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c777fdb7a985d%3A0x8e0bc88a065624a4!2sLaika%20pet%20care%20center%20(pets%20clinic%20)!5e0!3m2!1sar!2sjo!4v1699239857094!5m2!1sar!2sjo" width="100%" height="480px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
        DB::table('clinics')->insert([
            'name' => 'Soul Pets Clinic',
            'image' => 'http://127.0.0.1:8000/frontend/images/clinics/soul.png',
            'location' => 'Al-Razi Street, Irbid',
            'description' =>'hi',
            'about' =>'Our team of veterinary professionals works together to ensure that your pet’s needs are provided for at all times. We prioritize your pet long-term health by focusing on preventive services. You will love our highly skilled, compassionate veterinarians. We offer a comprehensive range of services under one roof.',
            'location_map' =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.6609575016664!2d35.8462871!3d32.535201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c77db1f92cfc1%3A0x7deae7d732993e86!2sSoul%20Pets%20Clinic!5e0!3m2!1sar!2sjo!4v1699240027748!5m2!1sar!2sjo" width="100%" height="480px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
        DB::table('clinics')->insert([
            'name' => 'Flamingo pet hotel',
            'image' => 'http://127.0.0.1:8000/frontend/images/clinics/flamingo.jpg',
            'location' => '35, Irbid, Jordan',
            'description' =>'hi',
            'about' =>'Our team of veterinary professionals works together to ensure that your pet’s needs are provided for at all times. We prioritize your pet long-term health by focusing on preventive services. You will love our highly skilled, compassionate veterinarians. We offer a comprehensive range of services under one roof.',
            'location_map' =>'<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13454.937139821735!2d35.865204!3d32.533243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c77396442bccb%3A0x8f40e9868243c11b!2sFlamingo%20Pet&#39;s%20clinic!5e0!3m2!1sen!2sus!4v1699240184879!5m2!1sen!2sus" width="100%" height="480px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
        DB::table('clinics')->insert([
            'name' => 'Dr. Sabrina - Pets Clinic',
            'image' => 'http://127.0.0.1:8000/frontend/images/clinics/dr.jpg',
            'location' => '35, Irbid, Jordan',
            'description' =>'hi',
            'about' =>'Our team of veterinary professionals works together to ensure that your pet’s needs are provided for at all times. We prioritize your pet long-term health by focusing on preventive services. You will love our highly skilled, compassionate veterinarians. We offer a comprehensive range of services under one roof.',
            'location_map' =>'<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13454.937139821735!2d35.865204!3d32.533243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c77396442bccb%3A0x8f40e9868243c11b!2sFlamingo%20Pet&#39;s%20clinic!5e0!3m2!1sen!2sus!4v1699240184879!5m2!1sen!2sus" width="100%" height="480px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
        DB::table('clinics')->insert([
            'name' => 'Trust Pet Clinic ',
            'image' => 'http://127.0.0.1:8000/frontend/images/clinics/trust.jpg',
            'location' => 'Wasfi Altal Street, Irbid 21110, Jordan',
            'description' =>'hi',
            'about' =>'Our team of veterinary professionals works together to ensure that your pet’s needs are provided for at all times. We prioritize your pet long-term health by focusing on preventive services. You will love our highly skilled, compassionate veterinarians. We offer a comprehensive range of services under one roof.',
            'location_map' =>'<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13454.937139821735!2d35.865204!3d32.533243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c77396442bccb%3A0x8f40e9868243c11b!2sFlamingo%20Pet&#39;s%20clinic!5e0!3m2!1sen!2sus!4v1699240184879!5m2!1sen!2sus" width="100%" height="480px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
    }
}
