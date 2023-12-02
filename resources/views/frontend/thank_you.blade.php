@extends('frontend.layouts.master')

@section('content')

<div class="container">
    <br>
    <br>
    <br>
    <div class="container-fluid  pt-5">
        <div class="d-flex flex-column text-center mb-3 pt-5">
            <h1 class="text-primary">Thank You!</h1>
        </div>
    <center> <h3>Appointment Booked <br>
      <img src="{{ asset('frontend/images/check.jpg') }}"  alt="Check Image" width="250" height="250">
      <h3> Your appointment is now booked . 
        Thank you for using our online booking service.</p>
        <!-- with Dr.Raghad Al-Omari <br>on 12/12/2023 Sunday 11:am-->
        </h3></center>
    <br>
    <br>
    <br>
    <br>
</div>
</div>

@endsection
