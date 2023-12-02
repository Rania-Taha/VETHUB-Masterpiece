@extends('frontend.layouts.master')

@section('content')
    @include('sweetalert::alert')
    <!-- Services Start -->
    <div class="container-fluid  pt-5">
        <div class="d-flex flex-column text-center mb-3 pt-5">
            <h1 class="text-primary">{{ $all_clinics->name }} </h1>
        </div>

        <!-- About Start -->
        <div class="container-fluid  pt-5">
            <div class="container py-1">

                <div class="row py-5">
                    <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5 d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="text-primary">About Our Clinic</h4>
                            <br>
                            <h5>{{ $all_clinics->about }}</h5>
                            <br>
                            <div class="working-hours">
                                <h5 class="mb-3 text-success">Working hours</h5>
                                <table class="table table-sm">
                                    {{-- {{ dd($work_hour) }} --}}
                                    @foreach ($work_hour as $item)
                                        <tr>
                                            <td>{{ $item->day }}</td>
                                            <td>{{ $item->start_at }}</td>
                                            <td>{{ $item->ends_at }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <div class="row px-5">
                            <div class="col-12 p-3">
                                <img class="img-fluid w-100" src="{{ asset($all_clinics->image) }}" alt="">
                                {{-- <img src="{{ asset($item->image) }}" class="card-img-top" alt="Clinic Image" >  --}}
                                <center style="font-size: 40px; margin-top: 15px;">
                                    {{-- <a href="https://www.facebook.com/Treatypet/" class="social"><i class="bi bi-facebook fs-3"></i></a>
                                    <a href="#" class="social"><i class="bi bi-instagram fs-3"></i></a> --}}

                                    <a href="#book" class="btn  btn-lg btn-primary mt-3 mt-md-4 px-4 ">Book Now</a>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- About End -->
            <br>
            <div class="container py-4">
                <h2 class="text-primary text-center">Our Services</h2>
                <br>
                <br>
                <div class="row pb-3">
                    @foreach ($clinic_service as $item)
                        <div class="col-md-3 mb-5">
                            <div class="card d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
                                <img class="img-fluid mx-auto" src="{{ asset($item->image) }}" alt=""
                                    style="max-width: 100px;">
                                <br>
                                <h3 class="mb-3 text-success" style="font-size: 26px;">{{ $item->service_name }}</h3>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
        <!-- Services End -->

        <br><br>
        <!-- Booking Start -->
        <div class="container-fluid">
            <h2 class="text-primary text-center">Book Now</h2>
            <br>
            <br>
            <div class="container">

                <div class="row align-items-center">
                   
                    <div class="col-lg-6">
                        <div class="bg-primary py-5 px-4 px-sm-5">
                            {{-- @auth --}}
                            <!-- Booking Form Here -->

                            <!-- Booking Form -->
                            <form method="POST" action="{{ route('bookings.store') }}">
                                @csrf

                                <!-- Message for Non-Logged-In Users -->
                                @guest
                                    <div class="alert alert-info">
                                        You must be logged in to book an appointment. Please <a
                                            href="{{ route('register') }}">register</a> or <a href="{{ route('login') }}">log
                                            in</a>.
                                    </div>
                                @endguest

                                <!-- Form Fields -->
                                <div class="form-group">
                                    @auth
                                        <input type="text" class="form-control border-0 p-4" placeholder="Your Name"
                                            value="{{ $user->first_name }} {{ $user->last_name }}" required="required" />
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">

                                        </div>
                                    @else
                                        <input type="text" class="form-control border-0 p-4" placeholder="Your Name"
                                            required="required" disabled />
                                    @endauth
                                </div>
                                <div class="form-group">
                                    @auth
                                        <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                            value="{{ $user->email }}" required="required" />
                                    @else
                                        <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                            required="required" disabled />
                                    @endauth
                                </div>

                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="date" id="dateInput" min="" max=""
                                            placeholder="Reservation Date"
                                            class="form-control border-0 p-4 datetimepicker-input" name="date" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <select name="time" class="custom-select border-0 px-4" style="height: 47px;">
                                            <option selected>Select A Time</option>
                                            @php
                                                $selectedDate = old('date', ''); // Use old('date') to retain user selection on validation failure
                                                $bookedTimes = $bookedTimeSlots->get($selectedDate, []);
                                            @endphp
                                            {{-- <h1>{{$bookedTime}}</h1> --}}
                                            @foreach ($schedule as $item)
                                                {{-- @if ($bookedTime == $item->time) --}}
                                                @php
                                                    $isBooked = in_array($item->time, $bookedTimes);
                                                @endphp

                                                <option value="{{ $item->id }}|{{ $item->time }}"
                                                    {{ $isBooked ? 'disabled' : '' }}>
                                                    {{ $item->time }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-dark btn-block border-0 py-3">
                                        <img src="https://www.digitalmastersmag.com/magazine/wp-content/uploads/2015/11/pp-icon-round.png" alt="PayPal" style="width: 35px; margin-right: 10px;">
                                        Pay Now with PayPal
                                    </button>
                                                                    </div>
                                
                            </form>

                        </div>

                     

                    </div>

                    <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                        <h1 class="display-4 mb-4">Book For <span class="text-primary">Your Pet</span></h1>
                        {{-- <div class="row py-2">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Syrgery</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-food font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Feeding</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Grooming</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Training</h5>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <br>
                        <p style="font-size: 21px; color:black"> To secure your appointment, a <span style="font-size: 22px; font-weight: bold;">2 JOD</span> booking fee is required, which will be deducted from your total bill at the clinic. Thank you for choosing us!</p>
<br>
<br><br>
<br>

                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Booking End -->
        <br>
        <!-- Team Start -->
        <div class="container mt-5 pt-5 pb-3">
            <div class="d-flex flex-column text-center mb-5">
                <h2 class="display-4 m-2">Meet Our <span class="text-primary">Veterinarians</span></h2>
            </div>
            <br><br>

            <div class="row pb-3 justify-content-center">
                @foreach ($clinic_vet as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card text-center bg-white p-3 shadow">
                       <center><img class="img-fluid rounded-circle mb-3" src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                            style="width: 180px; height: 180px; object-fit: cover;"> </center> 
                        <h3 class="mb-2 text-success" style="font-size: 24px;">{{ $item->name }}</h3>
                        <h5>{{ $item->position }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>

        <div class="container-fluid  my-5 p-0 py-5">
            <div class="container p-0 py-5">
                <div class="d-flex flex-column text-center mb-5">
                    <h4 class="text-secondary mb-3">Happy Clients & Feedbacks</h4>
                    <h1 class="display-4 m-0">Our Client <span class="text-primary">Says</span></h1>
                </div>

              
                <!-- Carousel wrapper -->
                <div id="carouselExampleControls" class="carousel slide text-center carousel-dark"
                    data-mdb-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($review as $key => $item)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <img class="rounded-circle shadow-1-strong mb-4"
                                    src="{{ $item->user->image ?? asset('http://127.0.0.1:8000/frontend/images/avatar1.jpg') }}"
                                    alt="avatar" style="width: 180px;" />
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <h5 class="mb-3" style="font-size: 23px">{{ $item->user->first_name }}
                                            {{ $item->user->last_name }}</h5>
                                        <br>
                                        <p style="font-size: 23px">
                                            <i class="fas fa-quote-left pe-2"></i>
                                            {{ $item->review_text }}
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <center>
                                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                        @php
                                            $maxPaws = 5; // Total number of paws
                                            $rating = $item->rating ?? 0; // Get the rating value from the database or default to 0
                                            $orangePaws = $rating >= 0 ? min($maxPaws, max(0, $rating)) : 0; // Calculate the number of filled paws
                                            $grayPaws = $maxPaws - $orangePaws; // Calculate the number of gray (empty) paws
                                        @endphp

                                        @for ($i = 0; $i < $orangePaws; $i++)
                                            <center>
                                                <li><i class="fas fa-paw" style="color: #f17045; font-size: 25px;"></i>
                                                </li>
                                            </center>
                                        @endfor

                                        @for ($i = 0; $i < $grayPaws; $i++)
                                            <li><i class="far fa-paw" style="color: #4c4c4c; font-size: 25px;"></i></li>
                                        @endfor

                                        {{-- In case the loops do not render any paws --}}
                                        @if ($grayPaws === $maxPaws)
                                            @for ($i = 0; $i < $maxPaws; $i++)
                                                <li><i class="far fa-paw" style="color: #4c4c4c; font-size: 25px;"></i>
                                                </li>
                                            @endfor
                                        @endif
                                    </ul>
                                </center>


                            </div>
                        @endforeach

                        <div class="d-flex justify-content-center" style="height: 20px!important">
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                                data-slide="prev"
                                style="width: auto !important; padding: 0 !important; border: none !important; background: none !important ; margin-top:-220px">
                                <span class="carousel-control-prev-icon fas fa-chevron-left"
                                    style="width: 30px !important; height: 30px !important; border-radius: 50% !important; background-color: rgb(255, 255, 255) !important; color: rgb(0, 0, 0) !important; line-height: 30px !important; font-size: 20px !important; left: 10px !important;"></span>
                                <span style="color: black">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                                data-slide="next"
                                style="width: auto !important; padding: 0 !important; border: none !important; background: none !important; margin-top:-220px">
                                <span class="carousel-control-next-icon fas fa-chevron-right"
                                    style="width: 30px !important; height: 30px !important; border-radius: 50% !important; background-color: rgb(255, 255, 255) !important; color: rgb(0, 0, 0) !important; line-height: 30px !important; font-size: 20px !important; right: 10px !important;"></span>
                                <span style="color: black">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Carousel wrapper -->


            <center>
                <h4 class="text-secondary mb-3"> Clinic Location</h4>
            </center>
            <br>
            <div class="col-12 mb-n2 p-0" style="width: 100% !important;">
                {!! $all_clinics->location_map !!}
            </div>
            <br>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <script>
                // Get the current date
                const currentDate = new Date();

                // Calculate the date 7 days from now
                const sevenDaysFromNow = new Date(currentDate);
                sevenDaysFromNow.setDate(currentDate.getDate() + 7);

                // Format the dates as YYYY-MM-DD for the input element
                const minDate = currentDate.toISOString().split('T')[0];
                const maxDate = sevenDaysFromNow.toISOString().split('T')[0];

                // Set the min and max attributes of the input element
                const dateInput = document.getElementById("dateInput");
                dateInput.setAttribute("min", minDate);
                dateInput.setAttribute("max", maxDate);
            </script>
        @endsection
