@extends('frontend.layouts.master')


@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 carouselDiv" style="background-color: #ffffff">
        <div id="logo-carousel" class="carousel slide" data-ride="carousel" style="background-color: #ffffff">
            <div class="carousel-inner" style="background-color: #ffffff">
                <div class="carousel-item" style="background-color: #ffffff">
                    <div class="carousel-image" style="background-image: url('frontend/images/home/a.jpg')"></div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; ">
                            <h3 class="text-white mb-3 d-none d-sm-block">
                                Find A Veterinarian
                            </h3>
                            <h1 class="display-3 text-white mb-3">Find A Veterinarian</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">
                                Help is just a click away,
                                Free live chat for instant advice
                            </h5>
                            <a href="/clinic_" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="/about" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="carousel-image"
                        style="background-image: url('frontend/images/home/pexels-freestocksorg-4074725.jpg')"></div>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px">
                            <h3 class="text-white mb-3 d-none d-sm-block">
                                Best Pet Services
                            </h3>
                            <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">
                                Because Your Pet Deserves the best Check Out Our Services
                            </h5>
                            <a href="/blog_website" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Read More</a>
                            {{-- <a href="/about" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="carousel-video" >
                        <video width="100%" height="100vh" autoplay loop>
                            <source src="frontend/images/home/pexels-thirdman-8944060 (2160p).mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px">
                            <h3 class="text-white mb-3 d-none d-sm-block">
                                Best Pet Services
                            </h3>
                            <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">
                                Highest Quality Care For Pets You'll Love
                            </h5>
                            <a href="/clinic_" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="/about" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#logo-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#logo-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>

    <!-- Carousel End -->


    {{-- Services --}}
    @include('frontend.home.sections.services')
    {{-- End Services --}}

    
    {{-- Booking --}}
    @include('frontend.home.sections.book')
    {{-- End Booking --}}

<br>
<br>
    <div class="container py-5" style="background-color: #ffffff;">
        <div class="row py-5 aboutusindex">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h2 class="text-secondary mb-4" >About Us</h2>
                <h3 class="text-muted mb-4">
                    <span class="text-primary">Compassionate Care for Your Beloved Pets</span>
                </h3>
                <p class="mb-4" style="font-size: 18px; line-height: 1.6;">
                    We are dedicated pet lovers committed to providing comprehensive pet care services. Our passion for exceptional pet care and customer service is fueled by our respect for the human-animal bond.
                </p>
                <ul class="list-inline">
                    <li>
                        <h5>
                            <i class="fas fa-paw text-secondary mr-3"></i> Comprehensive Services
                        </h5>
                    </li>
                    <!-- Add more service points with icons -->
                    <li>
                        <h5>
                            <i class="fas fa-heartbeat text-secondary mr-3"></i> Emergency Care
                        </h5>
                    </li>
                    <li>
                        <h5>
                            <i class="fas fa-user-md text-secondary mr-3"></i> Behavioral Care
                        </h5>
                    </li>                </ul>
                <a href="/about" class="btn btn-lg btn-primary mt-4 px-4">Read More</a>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100 mt-5" src="frontend/images/home/about-1.jpg" alt="Pets and Care"
                            style="width: auto; height: 320px; border-radius: 8px;" />
                    </div>
                    <!-- Add more images related to pet care -->
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- About End -->

  
    

    {{-- reviews --}}
    {{-- @include('frontend.home.sections.reviews') --}}
    {{-- End reviews --}}

    {{-- blog --}}
    @include('frontend.home.sections.blog')
    {{-- End blog --}}
<br>
{{-- <div class="container-fluid bg-light py-5 text-center" style="max-width: 75%; border-radius: 20px; background-color: #f9f9f9; padding: 30px;">
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="mb-4">Grow Your Clinic with Us!</h2>
                <p class="lead mb-4" style="color: black;">Join our network of veterinary clinics and expand your reach. Partner with us to provide <br> exceptional pet care services.</p>
                <a href="/about" class="btn btn-lg btn-primary mt-3 px-4">Join Now</a>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid bg-light py-5 text-center" style="max-width: 75%; border-radius: 20px; background-color: #f9f9f9; padding: 30px; position: relative; overflow: hidden;">
    <!-- Rest of your content -->
    <div class="container" style="position: relative;">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="mb-4">Grow Your Clinic with Us!</h2>
                <p class="lead mb-4" style="color: black;">Join our network of veterinary clinics and expand your reach. Partner with us to provide exceptional pet care services.</p>
                <a href="/contact" class="btn btn-lg btn-primary mt-4 px-4">Join Now</a>
            </div>
        </div>
    </div>
    <!-- Moving paw icons -->
    <i class="fas fa-paw moving-paw" style="position: absolute; font-size: 20px; color: #000000; top: -10px; left: -10px; animation: movePaws1 1s infinite;"></i>
    <i class="fas fa-paw moving-paw" style="position: absolute; font-size: 20px; color: #000000; top: -10px; right: -10px; animation: movePaws2 1s infinite;"></i>

</div>

<script>
    // JavaScript for animating the paw icons
    const pawIcons = document.querySelectorAll('.moving-paw');

    pawIcons.forEach((icon, index) => {
        const animationDelay = index * 0.5; // Adjust the delay between animations

        icon.style.animation = `movePaws${index + 1} 4s infinite ${animationDelay}s`;
    });
</script>

<style>
    /* Keyframe animations for moving paw icons */
    @keyframes movePaws1 {
        0% { transform: translate(0, 0); }
        25% { transform: translate(150px, -50px); }
        50% { transform: translate(300px, 0); }
        75% { transform: translate(100px, 50px); }
        100% { transform: translate(0, 0); }
    }

    @keyframes movePaws2 {
        0% { transform: translate(0, 0); }
        25% { transform: translate(-50px, -50px); }
        50% { transform: translate(-100px, 0); }
        75% { transform: translate(-50px, 50px); }
        100% { transform: translate(0, 0); }
    }

</style>

@endsection
