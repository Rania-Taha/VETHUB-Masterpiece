@extends('frontend.layouts.master')


@section('content')
    <!----------------------------------------------- User Profile ----------------------------------------------->
	<section class="ftco-section ftco-cart">
		<div class="container rounded">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <h1 class="mb-3 mt-5 bread">User Profile</h1>
                        <form method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <img class="rounded-circle mt-5" width="300px" src="{{ asset($user->image) }}" id="profile-image">
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </form>
                    </div>
                </div>
        
                <div class="col-lg-8 col-md-5">
                    <div class="p-3 py-5">
                        <br><br><br><br><br><br>
                        <form method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="row mt-6">
                            
                            <div class="col-md-6">
                                
                                <label class="labels">First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="first name" value="{{ $user->first_name }}">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="last name" value="{{ $user->last_name }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="enter phone number" value="{{ $user->phone }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="enter email id" value="{{ $user->email }}">
                            </div>
                        </div>
                        <br><br>
                        <center>
                            <div>
                                <button type="submit" class="btn btn-primary py-3 px-4">Save Profile</button>
                            </div>
                        </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      

        <div class="billing_form container" data-aos="fade-up" data-aos-duration="2000" style="padding-top: 35px;">
                <h3 class="form_title mb_30">Upcomming Appointments</h3>
                <div class="form_wrap">
                    <div class="checkout_table table-responsive">
                        <table class="table text-center mb_50">
                            <thead class="text-uppercase text-uppercase">
                                <tr>
                                    <th> Number</th>
                                    <th>Clinic/Video</th>
                                    <th>Date</th>
                                    <th>Total Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Video Call<br>Dr.Raghad Omari</td>
                                    <td>01-09-2023 <br>10:00 am</td>
                                    <td>7 JOD</td>
                                    <td>
                                        <a href="#" class="btn btn-success py-2 px-4">Edit </a>
                                        <a href="#" class="btn btn-danger py-2 px-3">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Clinic<br>Treaty Pet Clinic</td>
                                    <td>05-09-2023 <br>15:00 pm</td>
                                    <td>0 JOD</td>
                                    <td>
                                        <a href="#" class="btn btn-success py-2 px-4">Edit </a>
                                        <a href="#" class="btn btn-danger py-2 px-3">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <br><br>
        <div class="billing_form container" data-aos="fade-up" data-aos-duration="2000" style="padding-top: 35px;">
            <h3 class="form_title mb_30">Previous Appointments</h3>
            <div class="form_wrap">
                <div class="checkout_table table-responsive">
                    <table class="table text-center mb_50">
                        <thead class="text-uppercase text-uppercase">
                            <tr>
                                <th> Number</th>
                                <th>Clinic/Video</th>
                                <th>Date</th>
                                <th>Total Price</th>
                                <th>Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Video Call<br>Dr.Saba Rihani</td>
                                <td>12-07-2023 <br>09:40 am</td>
                                <td>5 JOD</td>
                                <td>
                                    <i class="fas fa-paw text-muted"></i>
                                    <i class="fas fa-paw text-muted"></i>
                                    <i class="fas fa-paw text-muted"></i>
                                    <i class="fas fa-paw text-muted"></i>
                                    <i class="fas fa-paw text-muted"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Clinic<br>Treaty Pet Clinic</td>
                                <td>10-07-2023 <br>13:30 pm</td>
                                <td>0 JOD</td>
                                <td>
                                    <i class="fas fa-paw text-muted"></i>
                                    <i class="fas fa-paw text-muted"></i>
                                    <i class="fas fa-paw text-muted"></i>
                                    <i class="fas fa-paw text-muted"></i>
                                    <i class="fas fa-paw text-muted"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    </section>
	<!--///////////////////////////////////////// END Of User Profile /////////////////////////////////////////-->
	<hr style="bAppointments-top: 1px solid gray;">

    @endsection

    <script>
        function updateProfileImage(input) {
            var profileImage = document.getElementById('profile-image');
        
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    profileImage.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>