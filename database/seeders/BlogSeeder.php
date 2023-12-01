<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import statement


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            'title' => 'My Dog Won’t Eat',
            'image1' => 'http://127.0.0.1:8000/assets/img/dog-wont-eat.webp',
            'image2' => 'http://127.0.0.1:8000/assets/img/pexels-bethany-ferr-5482828.jpg',
            'short_description' => 'What should I do ? Having a dog that refuses to eat can be a worrying and irritating experience for any pet owner.',
            'section1' =>'Having a dog that refuses to eat can be a worrying and irritating experience for any pet owner. While the occasional loss of appetite is common, a persistent unwillingness to eat may point to a serious problem that needs to be addressed. In this article, we will examine some common reasons why your dog may not be eating and provide helpful advice to stimulate their appetite. Remember, if your dog’s appetite loss persists or is followed by other unsettling symptoms, it’s important to consult a veterinarian for a proper diagnosis.',
            'section2' => 'Below are ways you can help your pet who isn’t eating and get them back to a healthy eating routine:
            Observe Your Pet For Health Issues
            A wane in appetite can often be a sign of an undiagnosed health problem. Dental issues, gastrointestinal disorders, infections, and pain are just a few ailments or conditions that could have an impact on your dog’s eating habits. Observe your pet for any other symptoms such as vomiting, diarrhea, excessive thirst (polydipsia), or sluggish behavior. If you notice anything out of the ordinary, it’s best to consult with a veterinarian to rule out any medical causes.
            Provide Your Pup with a Peaceful Environment
            Any changes in a dog’s schedule or habitat can impact its appetite. Major changes like moving to a new home, the introduction of a new pet, or even rearrangement of furniture can create fretting and anxiety, leading to a decreased appetite. Provide your dog with a peaceful and cozy environment, ensuring they have a quiet place to eat without any interactions.
            Gradually Try a New Food
            Just like humans, dogs have dietary preferences. They can be reluctant if you have changed your dog’s diet or introduced a new brand, they may be hesitant to eat. Some dogs may also have allergies or sensitivities to certain components, causing them to refuse their meals. Consider gradually changing over to a portion of new good quality food and consult with your vet to ensure you’re offering a balanced and appropriate diet for your dog’s specific needs.
            Stick to a Consistent Feeding Schedule
            Analyze your dog’s feeding volume and frequency. Some dogs may prefer petite, more frequent meals, while others thrive on a set routine. Ensure you are feeding your dog meals at the scheduled time and avoid leaving food out for longer periods, as this may reduce their motivation to eat.
            Limit Treats and Avoid Table Scraps
            Spoiling our furry friends with treats and table scraps can sometimes backfire. If your dog is regularly indulged with extra tidbits, they may develop a preference for these treats over their regular meals. Limit the number of treats and scraps you offer and make sure they are not a significant portion of their daily caloric intake. Encourage healthy eating habits by using treats as rewards during training sessions or as occasional supplements to their regular diet.',
            'section3' => 'Enhancing Palatability
            If your dog is a finicky eater, you can try improving the palatability of their meals. Adding warm water or low-sodium chicken broth to dry kibble can release alluring smells and make the food more appetizing. Another option is to mix a tiny amount of wet food with dry kibble. However, always ensure that any changes to their diet are made gradually to avoid digestive upset.
            Ensure Your Dog is Getting Enough Exercise
            Regular exercise and mental stimulation are essential for a healthy and happy dog. Lack of physical activity or mental engagement can contribute to a decreased appetite. Ensure your dog is getting enough exercise through walks, playtime, and interactive toys. Mental stimulation can be provided through puzzle toys or training sessions, which can help stimulate their appetite.
            Diagnostic Steps a Veterinarian May Take:
            Physical Examination
            The vet will conduct an in-depth physical examination of your dog, monitoring vital signs and assessing overall health. You will be questioned about your dog’s feeding habits, recent changes in diet or environment, any medications or supplements they are taking, and other pertinent information that can help in the diagnosis.
            Blood Test
            Bloodwork is a valuable diagnostic tool that can provide insights into your dog’s overall well-being.
            Urinalysis
            Analyzing a urine sample can help detect urinary tract infections, kidney problems, or other issues that may contribute to the loss of appetite.
            Imaging Studies
            In some cases, X-rays, ultrasounds, or other imaging techniques may be necessary to visualize internal organs and identify potential abnormalities or blockages. Depending on the vet’s findings and suspicions, they may recommend further tests such as specific disease screenings, endoscopy, or biopsies.
            Seek Veterinary Care if Your Dog Won’t Eat
            If your dog won’t eat, it’s important to monitor their behavior and overall health. If they are still playful, active, and hydrated, it may be a temporary issue. However, if the loss of appetite continues for more than 24 hours or is accompanied by other concerning symptoms, it’s best to consult your veterinarian for a proper examination and advice tailored to your puppy’s specific situation. For more information, contact Orlando Vets by calling one of our locations. Our team is always happy to help!'
        ]);
        DB::table('blogs')->insert([
            'title' => '6 Ways to Find a Lost Cat',
            'image1' => 'http://127.0.0.1:8000/assets/img/lostcat (2).jpg',
            'image2' => 'http://127.0.0.1:8000/assets/img/pexels-bethany-ferr-5482828.jpg',
            'short_description' => 'It’s every cat owner’s nightmare: your feline friend escapes your home and is loose somewhere in the neighborhood.',
            'section1' =>'Having a dog that refuses to eat can be a worrying and irritating experience for any pet owner. While the occasional loss of appetite is common, a persistent unwillingness to eat may point to a serious problem that needs to be addressed. In this article, we will examine some common reasons why your dog may not be eating and provide helpful advice to stimulate their appetite. Remember, if your dog’s appetite loss persists or is followed by other unsettling symptoms, it’s important to consult a veterinarian for a proper diagnosis.',
            'section2' => 'Below are ways you can help your pet who isn’t eating and get them back to a healthy eating routine:
            Observe Your Pet For Health Issues
            A wane in appetite can often be a sign of an undiagnosed health problem. Dental issues, gastrointestinal disorders, infections, and pain are just a few ailments or conditions that could have an impact on your dog’s eating habits. Observe your pet for any other symptoms such as vomiting, diarrhea, excessive thirst (polydipsia), or sluggish behavior. If you notice anything out of the ordinary, it’s best to consult with a veterinarian to rule out any medical causes.
            Provide Your Pup with a Peaceful Environment
            Any changes in a dog’s schedule or habitat can impact its appetite. Major changes like moving to a new home, the introduction of a new pet, or even rearrangement of furniture can create fretting and anxiety, leading to a decreased appetite. Provide your dog with a peaceful and cozy environment, ensuring they have a quiet place to eat without any interactions.
            Gradually Try a New Food
            Just like humans, dogs have dietary preferences. They can be reluctant if you have changed your dog’s diet or introduced a new brand, they may be hesitant to eat. Some dogs may also have allergies or sensitivities to certain components, causing them to refuse their meals. Consider gradually changing over to a portion of new good quality food and consult with your vet to ensure you’re offering a balanced and appropriate diet for your dog’s specific needs.
            Stick to a Consistent Feeding Schedule
            Analyze your dog’s feeding volume and frequency. Some dogs may prefer petite, more frequent meals, while others thrive on a set routine. Ensure you are feeding your dog meals at the scheduled time and avoid leaving food out for longer periods, as this may reduce their motivation to eat.
            Limit Treats and Avoid Table Scraps
            Spoiling our furry friends with treats and table scraps can sometimes backfire. If your dog is regularly indulged with extra tidbits, they may develop a preference for these treats over their regular meals. Limit the number of treats and scraps you offer and make sure they are not a significant portion of their daily caloric intake. Encourage healthy eating habits by using treats as rewards during training sessions or as occasional supplements to their regular diet.',
            'section3' => 'Enhancing Palatability
            If your dog is a finicky eater, you can try improving the palatability of their meals. Adding warm water or low-sodium chicken broth to dry kibble can release alluring smells and make the food more appetizing. Another option is to mix a tiny amount of wet food with dry kibble. However, always ensure that any changes to their diet are made gradually to avoid digestive upset.
            Ensure Your Dog is Getting Enough Exercise
            Regular exercise and mental stimulation are essential for a healthy and happy dog. Lack of physical activity or mental engagement can contribute to a decreased appetite. Ensure your dog is getting enough exercise through walks, playtime, and interactive toys. Mental stimulation can be provided through puzzle toys or training sessions, which can help stimulate their appetite.
            Diagnostic Steps a Veterinarian May Take:
            Physical Examination
            The vet will conduct an in-depth physical examination of your dog, monitoring vital signs and assessing overall health. You will be questioned about your dog’s feeding habits, recent changes in diet or environment, any medications or supplements they are taking, and other pertinent information that can help in the diagnosis.
            Blood Test
            Bloodwork is a valuable diagnostic tool that can provide insights into your dog’s overall well-being.
            Urinalysis
            Analyzing a urine sample can help detect urinary tract infections, kidney problems, or other issues that may contribute to the loss of appetite.
            Imaging Studies
            In some cases, X-rays, ultrasounds, or other imaging techniques may be necessary to visualize internal organs and identify potential abnormalities or blockages. Depending on the vet’s findings and suspicions, they may recommend further tests such as specific disease screenings, endoscopy, or biopsies.
            Seek Veterinary Care if Your Dog Won’t Eat
            If your dog won’t eat, it’s important to monitor their behavior and overall health. If they are still playful, active, and hydrated, it may be a temporary issue. However, if the loss of appetite continues for more than 24 hours or is accompanied by other concerning symptoms, it’s best to consult your veterinarian for a proper examination and advice tailored to your puppy’s specific situation. For more information, contact Orlando Vets by calling one of our locations. Our team is always happy to help!'
        ]);
        DB::table('blogs')->insert([
            'title' => 'How to take care of pets?',
            'image1' => 'http://127.0.0.1:8000/assets/img/blog-1.jpg',
            'image2' => 'http://127.0.0.1:8000/assets/img/pexels-bethany-ferr-5482828.jpg',
            'short_description' => 'Discover practical tips, expert advice, and actionable steps to ensure your pets live healthy, happy lives.',
            'section1' =>'Having a dog that refuses to eat can be a worrying and irritating experience for any pet owner. While the occasional loss of appetite is common, a persistent unwillingness to eat may point to a serious problem that needs to be addressed. In this article, we will examine some common reasons why your dog may not be eating and provide helpful advice to stimulate their appetite. Remember, if your dog’s appetite loss persists or is followed by other unsettling symptoms, it’s important to consult a veterinarian for a proper diagnosis.',
            'section2' => 'Below are ways you can help your pet who isn’t eating and get them back to a healthy eating routine:
            Observe Your Pet For Health Issues
            A wane in appetite can often be a sign of an undiagnosed health problem. Dental issues, gastrointestinal disorders, infections, and pain are just a few ailments or conditions that could have an impact on your dog’s eating habits. Observe your pet for any other symptoms such as vomiting, diarrhea, excessive thirst (polydipsia), or sluggish behavior. If you notice anything out of the ordinary, it’s best to consult with a veterinarian to rule out any medical causes.
            Provide Your Pup with a Peaceful Environment
            Any changes in a dog’s schedule or habitat can impact its appetite. Major changes like moving to a new home, the introduction of a new pet, or even rearrangement of furniture can create fretting and anxiety, leading to a decreased appetite. Provide your dog with a peaceful and cozy environment, ensuring they have a quiet place to eat without any interactions.
            Gradually Try a New Food
            Just like humans, dogs have dietary preferences. They can be reluctant if you have changed your dog’s diet or introduced a new brand, they may be hesitant to eat. Some dogs may also have allergies or sensitivities to certain components, causing them to refuse their meals. Consider gradually changing over to a portion of new good quality food and consult with your vet to ensure you’re offering a balanced and appropriate diet for your dog’s specific needs.
            Stick to a Consistent Feeding Schedule
            Analyze your dog’s feeding volume and frequency. Some dogs may prefer petite, more frequent meals, while others thrive on a set routine. Ensure you are feeding your dog meals at the scheduled time and avoid leaving food out for longer periods, as this may reduce their motivation to eat.
            Limit Treats and Avoid Table Scraps
            Spoiling our furry friends with treats and table scraps can sometimes backfire. If your dog is regularly indulged with extra tidbits, they may develop a preference for these treats over their regular meals. Limit the number of treats and scraps you offer and make sure they are not a significant portion of their daily caloric intake. Encourage healthy eating habits by using treats as rewards during training sessions or as occasional supplements to their regular diet.',
            'section3' => 'Enhancing Palatability
            If your dog is a finicky eater, you can try improving the palatability of their meals. Adding warm water or low-sodium chicken broth to dry kibble can release alluring smells and make the food more appetizing. Another option is to mix a tiny amount of wet food with dry kibble. However, always ensure that any changes to their diet are made gradually to avoid digestive upset.
            Ensure Your Dog is Getting Enough Exercise
            Regular exercise and mental stimulation are essential for a healthy and happy dog. Lack of physical activity or mental engagement can contribute to a decreased appetite. Ensure your dog is getting enough exercise through walks, playtime, and interactive toys. Mental stimulation can be provided through puzzle toys or training sessions, which can help stimulate their appetite.
            Diagnostic Steps a Veterinarian May Take:
            Physical Examination
            The vet will conduct an in-depth physical examination of your dog, monitoring vital signs and assessing overall health. You will be questioned about your dog’s feeding habits, recent changes in diet or environment, any medications or supplements they are taking, and other pertinent information that can help in the diagnosis.
            Blood Test
            Bloodwork is a valuable diagnostic tool that can provide insights into your dog’s overall well-being.
            Urinalysis
            Analyzing a urine sample can help detect urinary tract infections, kidney problems, or other issues that may contribute to the loss of appetite.
            Imaging Studies
            In some cases, X-rays, ultrasounds, or other imaging techniques may be necessary to visualize internal organs and identify potential abnormalities or blockages. Depending on the vet’s findings and suspicions, they may recommend further tests such as specific disease screenings, endoscopy, or biopsies.
            Seek Veterinary Care if Your Dog Won’t Eat
            If your dog won’t eat, it’s important to monitor their behavior and overall health. If they are still playful, active, and hydrated, it may be a temporary issue. However, if the loss of appetite continues for more than 24 hours or is accompanied by other concerning symptoms, it’s best to consult your veterinarian for a proper examination and advice tailored to your puppy’s specific situation. For more information, contact Orlando Vets by calling one of our locations. Our team is always happy to help!'
        ]);
       
    }
}
