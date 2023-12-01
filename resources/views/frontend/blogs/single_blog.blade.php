@extends('frontend.layouts.master')
 
 
@section('content')


<!-- Detail Start -->
<div class="container py-5">
    <div class="row pt-5">
        <div class="col-lg-12">
            <div class="d-flex flex-column text-left mb-4">
                <h4 class="text-secondary mb-3">Blog Detail</h4>
                <h1 class="mb-3">{{ $blog->title }}</h1>
            </div>
            <br>
                <div class="mb-5">
                    <div class="row d-flex"> 
                     
                    <div class="col-md-6" style="font-size: 22px;">
                    <p> {{ $blog->section1 }}</p></div>
                    
                    <div class="col-md-6">
                        <img class="img-fluid w-100 mb-4" src="{{ asset($blog->image1) }}" alt="Image" > 
                        </div>
                        </div><br> <br>


                    <h2 class="mb-4">Tips to Follow</h2>
                    <img class="img-fluid w-50 float-left mr-4 mb-3" src="{{ asset($blog->image2) }}" alt="Image">
                    <p> {{ $blog->section2 }}</p>
                    {{-- <p> Below are ways you can help your pet who isn’t eating and get them back to a healthy eating routine:<br>

                        <span style="font-weight: bold;"> Observe Your Pet For Health Issues  </span>  <br>
                        A wane in appetite can often be a sign of an undiagnosed health problem. Dental issues, gastrointestinal disorders, infections, and pain are just a few ailments or conditions that could have an impact on your dog’s eating habits. Observe your pet for any other symptoms such as vomiting, diarrhea, excessive thirst (polydipsia), or sluggish behavior. If you notice anything out of the ordinary, it’s best to consult with a veterinarian to rule out any medical causes. <br>
                        
                        <span style="font-weight: bold;">Provide Your Pup with a Peaceful Environment </span> <br>
                        Any changes in a dog’s schedule or habitat can impact its appetite. Major changes like moving to a new home, the introduction of a new pet, or even rearrangement of furniture can create fretting and anxiety, leading to a decreased appetite. Provide your dog with a peaceful and cozy environment, ensuring they have a quiet place to eat without any interactions. <br>
                        
                        <span style="font-weight: bold;"> Gradually Try a New Food </span>  <br>
                        Just like humans, dogs have dietary preferences. They can be reluctant if you have changed your dog’s diet or introduced a new brand, they may be hesitant to eat. Some dogs may also have allergies or sensitivities to certain components, causing them to refuse their meals. Consider gradually changing over to a portion of new good quality food and consult with your vet to ensure you’re offering a balanced and appropriate diet for your dog’s specific needs.<br>
                        
                       <span style="font-weight: bold;">  Stick to a Consistent Feeding Schedule </span>  <br>
                        Analyze your dog’s feeding volume and frequency. Some dogs may prefer petite, more frequent meals, while others thrive on a set routine. Ensure you are feeding your dog meals at the scheduled time and avoid leaving food out for longer periods, as this may reduce their motivation to eat.<br>
                        
                         <span style="font-weight: bold;"> Limit Treats and Avoid Table Scraps </span> <br>
                        Spoiling our furry friends with treats and table scraps can sometimes backfire. If your dog is regularly indulged with extra tidbits, they may develop a preference for these treats over their regular meals. Limit the number of treats and scraps you offer and make sure they are not a significant portion of their daily caloric intake. Encourage healthy eating habits by using treats as rewards during training sessions or as occasional supplements to their regular diet.<br> --}}
                        <p> {{ $blog->section3 }}</p>
                        {{-- <span style="font-weight: bold;"> Enhancing Palatability  </span> <br>
                        If your dog is a finicky eater, you can try improving the palatability of their meals. Adding warm water or low-sodium chicken broth to dry kibble can release alluring smells and make the food more appetizing. Another option is to mix a tiny amount of wet food with dry kibble. However, always ensure that any changes to their diet are made gradually to avoid digestive upset.<br>
                        
                         <span style="font-weight: bold;"> Ensure Your Dog is Getting Enough Exercise </span> <br>
                        Regular exercise and mental stimulation are essential for a healthy and happy dog. Lack of physical activity or mental engagement can contribute to a decreased appetite. Ensure your dog is getting enough exercise through walks, playtime, and interactive toys. Mental stimulation can be provided through puzzle toys or training sessions, which can help stimulate their appetite.<br>
                        
                         <span style="font-weight: bold;"> Diagnostic Steps a Veterinarian May Take: </span> <br>
                        <span style="font-weight: bold;">  Physical Examination </span> <br>
                        The vet will conduct an in-depth physical examination of your dog, monitoring vital signs and assessing overall health. You will be questioned about your dog’s feeding habits, recent changes in diet or environment, any medications or supplements they are taking, and other pertinent information that can help in the diagnosis.<br>
                        
                        <span style="font-weight: bold;">  Blood Test </span> <br>
                        Bloodwork is a valuable diagnostic tool that can provide insights into your dog’s overall well-being. <br>
                        
                         <span style="font-weight: bold;"> Urinalysis </span> <br>
                        Analyzing a urine sample can help detect urinary tract infections, kidney problems, or other issues that may contribute to the loss of appetite.<br>
                        
                         <span style="font-weight: bold;"> Imaging Studies </span> <br>
                        In some cases, X-rays, ultrasounds, or other imaging techniques may be necessary to visualize internal organs and identify potential abnormalities or blockages. Depending on the vet’s findings and suspicions, they may recommend further tests such as specific disease screenings, endoscopy, or biopsies.<br>
                        
                         <span style="font-weight: bold;"> Seek Veterinary Care if Your Dog Won’t Eat </span> <br>
                        If your dog won’t eat, it’s important to monitor their behavior and overall health. If they are still playful, active, and hydrated, it may be a temporary issue. However, if the loss of appetite continues for more than 24 hours or is accompanied by other concerning symptoms, it’s best to consult your veterinarian for a proper examination and advice tailored to your puppy’s specific situation. For more information, contact Orlando Vets by calling one of our locations. Our team is always happy to help!</p><br> --}}
                   
                </div>
                
            </div>

            
        </div>
    </div>
    <!-- Detail End -->

@endsection


