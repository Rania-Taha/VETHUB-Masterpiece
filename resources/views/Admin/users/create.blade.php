@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            

            <div class="section-body">
                <div class="section-header" >
                <h1>Users</h1>
               
            </div>
                <div class="row">
                    <div class="col-12">
                        <br> 
                        <div class="card">
                            <div class="card-header">
                                <h4>Add a user</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ url('user') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" class="form-control" id="image"
                                                        placeholder="Choose an image">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="first_name">First Name</label>
                                                    <input type="name" name="first_name" class="form-control"
                                                        id="first_name" placeholder="First Name">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="last_name">last Name</label>
                                                    <input type="name" name="last_name" class="form-control"
                                                        id="last_name" placeholder="Last Name">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        id="email" placeholder="email">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="email">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        id="password" placeholder="password">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="phone">Phone</label>
                                                    <input type="number" name="phone" class="form-control"
                                                        id="phone" placeholder="phone">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="address">Address</label>
                                                    <input type="text" name="address" class="form-control"
                                                        id="address" placeholder="address">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="role">Role</label>
                                                    <select name="role" id="role" class="form-control">
                                                        <option value="user">user</option>
                                                        <option value="provider">provider</option>
                                                        <option value="admin">admin</option>
                                                        
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="clinic_id">Clinic Id</label>
                                                    <select name="clinic_id" id="clinic_id" class="form-control">
                                                        @foreach ($clinics as $item)
                                                        <option value="" > </option>
                                                        <option value="{{ $item->id }}"> {{ $item->id }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            
                                           


                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
