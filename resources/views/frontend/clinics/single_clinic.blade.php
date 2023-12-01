@extends('frontend.layouts.master')

@section('content')
    @include('sweetalert::alert')
    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="d-flex flex-column text-center mb-3 pt-5">
            <h1 class="text-primary">{{ $all_clinics->name }} </h1>
        </div>

        <!-- About Start -->
        <div class="container-fluid bg-light pt-5">
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
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-5">
                        {{-- <div class="bg-primary py-5 px-4 px-sm-5">
                            <form class="py-5" method="POST" action="{{ route('bookings.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name" value="{{$user->first_name}}"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email" value="{{$user->email}}"
                                        required="required" />
                                </div>
                                <div class="form-group">

                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">

                                            <input type="date" id="dateInput" min="" max=""
                                                placeholder="Reservation Date"
                                                class="form-control border-0 p-4 datetimepicker-input" required>


                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">

                                        <select class="custom-select border-0 px-4" style="height: 47px;">
                                            <option selected>Select A Time</option>
                                            @foreach ($schedule as $item)
                                                @if ($item->status == 'active')
                                                    <option value="{{ $item->time }}">{{ $item->time }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        @foreach ($clinic_service as $item)
                                            <option value="{{ $item->service_name }}">{{ $item->service_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <a href="" class="btn btn-dark btn-block border-0 py-3">Book Now</a>
                                </div>
                            </form>
                        </div> --}}
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
                                        {{-- <input type="text" class="form-control border-0 p-4" placeholder="user-id" name="user-id"
                                            value="{{ $user->id }}" required="required" /> --}}
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

                                                {{-- @endif --}}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="form-group">
                                    <select name="service" class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        @foreach ($clinic_service as $item)
                                            <option value="{{ $item->service_name }}">{{ $item->service_name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div>
                                    <button type="submit" class="btn btn-dark btn-block border-0 py-3">Book Now</button>
                                </div>
                            </form>

                        </div>

                    </div>

                    <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                        <h4 class="text-secondary mb-3">Going for a vacation?</h4>
                        <h1 class="display-4 mb-4">Book For <span class="text-primary">Your Pet</span></h1>
                        <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum
                        </p>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Boarding</h5>
                                    </div>
                                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-food font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Feeding</h5>
                                    </div>
                                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Grooming</h5>
                                    </div>
                                    <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Tranning</h5>
                                    </div>
                                    <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                                </div>
                            </div>
                        </div>
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
            <div class="row pb-3 justify-content-center" style="background:whitesmoke">
                @foreach ($clinic_vet as $item)
                    <div class="col-md-4 mb-5">
                        <div class="card d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
                            <img class="img-fluid mx-auto" src="{{ asset($item->image) }}" alt=""
                                style="max-width: 300px; max-height: 250px;">
                            <br>
                            <h3 class="mb-3 text-success" style="font-size: 27px;">{{ $item->name }}</h3>
                            <h5>{{ $item->position }}</h5>
                        </div>
                    </div>
                @endforeach
            </div> 
        </div>

            <div class="container-fluid bg-light my-5 p-0 py-5">
                <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Happy Clients & Feedbacks</h4>
                <h1 class="display-4 m-0">Our Client <span class="text-primary">Says</span></h1>
            </div>
          
            {{-- <div class="row text-center">
             @foreach ($review as $item)
              <div class="col-md-4 mb-5 mb-md-0">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <img src="{{ $item->user->image ?? asset('http://127.0.0.1:8000/frontend/images/avatar1.jpg' ) }}"
                         class="rounded-circle shadow-1-strong" width="60" height="60" />           
                    <h5 class="ml-3">{{ $item->user->first_name}} {{ $item->user->last_name}}</h5>
                </div>
               
                <p class="px-xl-3">
                  <i class="fas fa-quote-left pe-2"></i> {{ $item-> review_text }}
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                    @if ($item->rating == 5)
                        @for ($i = 1; $i <= 5; $i++)
                            <li>
                                <i class="fas fa-paw fa-sm text-warning"></i>
                            </li>
                        @endfor
                    @elseif ($item->rating == 4)
                        @for ($i = 1; $i <= 4; $i++)
                            <li>
                                <i class="fas fa-paw fa-sm text-warning"></i>
                            </li>
                        @endfor
                        <li>
                            <i class="fas fa-paw fa-sm text-warning"></i>
                        </li>
                    @elseif ($item->rating == 3)
                        @for ($i = 1; $i <= 3; $i++)
                            <li>
                                <i class="fas fa-paw fa-sm text-warning"></i>
                            </li>
                        @endfor
                        @for ($i = 1; $i <= 2; $i++)
                            <li>
                                <i class="fas fa-paw fa-sm"></i>
                            </li>
                        @endfor
                    @elseif ($item->rating == 2)
                        @for ($i = 1; $i <= 2; $i++)
                            <li>
                                <i class="fas fa-paw fa-sm text-warning"></i>
                            </li>
                        @endfor
                        @for ($i = 1; $i <= 3; $i++)
                            <li>
                                <i class="fas fa-paw fa-sm"></i>
                            </li>
                        @endfor
                    @elseif ($item->rating == 1)
                        <li>
                            <i class="fas fa-paw fa-sm text-warning"></i>
                        </li>
                        @for ($i = 1; $i <= 4; $i++)
                            <li>
                                <i class="fas fa-paw fa-sm"></i>
                            </li>
                        @endfor
                    @else
                        @for ($i = 1; $i <= 5; $i++)
                            <li>
                                <i class="fas fa-paw fa-sm"></i>
                            </li>
                        @endfor
                    @endif
                </ul>
                <br>
                <br>
              </div>
              
              @endforeach
            </div> --}}
            <!-- Testimonial Start -->
        {{-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($review as $item)
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>{{ $item-> review_text }}</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ $item->user->image ?? asset('http://127.0.0.1:8000/frontend/images/avatar1.jpg' ) }}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">{{ $item->user->first_name}} {{ $item->user->last_name}}</h5>
                                <div class="mb-3">
                                                     {!! $item->rating !!} 
                                                     

                            </div>
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
        </div> --}}
        <!-- Carousel wrapper -->
<div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="rounded-circle shadow-1-strong mb-4"
          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
          style="width: 150px;" />
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
              nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
              fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
              doloremque.
            </p>
          </div>
        </div>
        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="far fa-star fa-sm"></i></li>
        </ul>
      </div>
      <div class="carousel-item">
        <img class="rounded-circle shadow-1-strong mb-4"
          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
          style="width: 150px;" />
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h5 class="mb-3">John Doe</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
              nesciunt sint eligendi reprehenderit reiciendis.
            </p>
          </div>
        </div>
        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="far fa-star fa-sm"></i></li>
        </ul>
      </div>
      <div class="carousel-item">
        <img class="rounded-circle shadow-1-strong mb-4"
          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px;" />
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h5 class="mb-3">Anna Deynah</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
              nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
              fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
              doloremque.
            </p>
          </div>
        </div>
        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="far fa-star fa-sm"></i></li>
        </ul>
      </div>
    </div>
    <button class="carousel-control-prev" style="border: none; background: none; color: black !important;" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon fas fa-chevron-left" style="width: 2em; height: 2em;"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" style="border: none; background: none; color: black !important;" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon fas fa-chevron-right" style="width: 2em; height: 2em;"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
  <!-- Carousel wrapper -->
        <!-- Testimonial End -->
        </div>

    </div>

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

    