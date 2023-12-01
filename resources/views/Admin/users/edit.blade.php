
@extends('Admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            <div class="section-header">
                <h1>Users</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Users</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit</h4> Users</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <br>
                                            
                                                <img width="150px" src="{{ asset($user->image) }}"> 
                                            </div> 
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" value="{{ $user->image }}"
                                                        class="form-control" id="image" placeholder="Choose an image">
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="first_name">First Name</label>
                                                    <input type="name" name="first_name" class="form-control"
                                                    value="{{ $user->first_name }}"
                                                        id="first_name" placeholder="First Name"> 
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="last_name">last Name</label>
                                                    <input type="name" name="last_name" class="form-control"
                                                    value="{{ $user->last_name }}"
                                                        id="last_name" placeholder="Last Name">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                    value="{{ $user->email }}"
                                                        id="email" placeholder="email">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="email">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                    value="{{ $user->password }}"
                                                        id="password" placeholder="password">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="phone">Phone</label>
                                                    <input type="number" name="phone" class="form-control"
                                                    value="{{ $user->phone }}"
                                                        id="phone" placeholder="phone">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="address">Address</label>
                                                    <input type="text" name="address" class="form-control"
                                                    value="{{ $user->address }}"
                                                        id="address" placeholder="address">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="role">Role</label>
                                                    <select name="role" id="role" class="form-control" value="{{ $user->role }}" >
                                                        <option value="user">user</option>
                                                        <option value="provider">provider</option>
                                                        <option value="admin">admin</option>
                                                        
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="clinic_id">Clinic Id</label>
                                                   
                                                    <select name="clinic_id" id="clinic_id" class="form-control" > 
                                                        @foreach ($clinic as $item)
                                                        <option value=""> </option>
                                                        <option value="{{ $item->id }}"> {{ $item->id }} </option>
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
