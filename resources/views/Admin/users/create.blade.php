@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left: 290px; width: 75%; padding: 20px;">
        <section class="section">
            <div class="section-body">
                <div class="section-header">
                    <h1>Users</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add a User</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ url('user') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" class="form-control" id="image">
                                                </div>
                                            </div>

                                            <div class="form-row col-md-8">
                                                <div class="form-group col-md-6 ">
                                                    <label for="first_name">First Name</label>
                                                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6 ">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                                                </div>
                                            </div>

                                            

                                            <div class="form-row col-md-8">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="phone">Phone</label>
                                                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address">Address</label>
                                                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="role">Role</label>
                                                    <select name="role" id="role" class="form-control">
                                                        <option value="user">User</option>
                                                        <option value="provider">Provider</option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="clinic_id">Clinic ID</label>
                                                    <select name="clinic_id" id="clinic_id" class="form-control">
                                                        <option value="">Select Clinic</option>
                                                        @foreach ($clinics as $item)
                                                            <option value="{{ $item->id }}">{{ $item->id }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

              

                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection