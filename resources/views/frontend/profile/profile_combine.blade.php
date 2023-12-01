@extends('frontend.layouts.master')

@section('content')
    <!------------------- User Profile --------------------------->
    <section>
        <div class="col-lg-12 col-md-3">
             <div class="d-flex flex-column align-items-center text-center p-3 py-5">
             <center>  <h1 class="mb-3 mt-5 bread">User Profile</h1></center>
            </div>
        </div>
        <div class="container" >
            <ul class="nav nav-tabs" id="myTabs" >
                <li class="nav-item" style="margin-left: 80px">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">My Bookings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                        aria-controls="review" aria-selected="false">My Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab"
                        aria-controls="password" aria-selected="false">Reset Password</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                    @include('frontend.profile.profile')
                    @include('frontend.profile.bookings')
                    @include('frontend.profile.review')
                    @include('frontend.profile.reset_password')


            </div>
        </div>

    </section>
@endsection
