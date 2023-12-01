@extends('frontend.layouts.master')


@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 carouselDiv">
        <div id="logo-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="carousel-image" style="background-image: url('frontend/images/home/dog.jpg')"></div>
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
                            <a href="clinic_" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="about" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-image"
                        style="background-image: url('frontend/images/home/AdobeStock_271437363.jpg')"></div>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px">
                            <h3 class="text-white mb-3 d-none d-sm-block">
                                Best Pet Services
                            </h3>
                            <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">
                                Because Your Pet Deserves the best Check Out Our Services
                            </h5>
                            <a href="clinic_" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="service.html" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="carousel-video">
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
                            <a href="clinic_" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="service.html" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
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


    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5 aboutusindex">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">About Us</h4>
                <h4 class="text-muted mb-3">
                    <span class="text-primary">We are here to help you and your pet.</span>
                </h4>
                <p class="mb-1" style="font-size: 18px">
                    We are pet lovers first, and vet services provider second. Our
                    passion for exceptional pet care and customer service is fueled by
                    our respect for the human-animal bond.
                </p>
                <br>
                <ul class="list-inline">
                    <li>
                        <h5>
                            <i class="fa fa-check-double text-secondary mr-3"></i> Flexible
                            Options
                        </h5>
                    </li>
                    <li>
                        <h5>
                            <i class="fa fa-check-double text-secondary mr-3"></i>Emergency
                            Services
                        </h5>
                    </li>
                    <li>
                        <h5>
                            <i class="fa fa-check-double text-secondary mr-3"></i>Client
                            Support
                        </h5>
                    </li>
                    <li>
                        <h5>
                            <i class="fa fa-check-double text-secondary mr-3"></i>Personalized Care
                        </h5>
                    </li>
                </ul>
                <a href="about.html" class="btn btn-lg btn-primary mt-3 px-4">Learn More</a>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100 mt-5" src="frontend/images/home/about-1.jpg" alt=""
                            style="width: auto; height: 320px" />
                    </div>
                    <!-- <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-3.jpg" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    {{-- reviews --}}
    {{-- @include('frontend.home.sections.reviews') --}}
    {{-- End reviews --}}

    {{-- blog --}}
    @include('frontend.home.sections.blog')
    {{-- End blog --}}

@endsection
