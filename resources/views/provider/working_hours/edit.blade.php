
@extends('provider.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            <div class="section-header">
                <h1>Working Hours</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Working Hours</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit</h4> Working Hours </h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('workHours.update', $working_hours->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="clinic_id">Clinic Id</label>
                                                    <select name="clinic_id" id="clinic_id" class="form-control">
                                                        
                                                        <option value="{{ $user->clinic_id }}"> {{ $user->clinic_id }}</option>
                                                        
                                                    </select>
                                                </div>

                                            </div>



                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="day">Day</label>
                                            <select name="day" id="day" class="form-control" value="{{ $working_hours->day }}">
                                                <option value="Sunday">Sunday</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="start_at">Starts At</label>
                                            <input type="time" name="start_at" class="form-control"
                                                id="start_at" placeholder="Enter Start At Hour" value="{{ $working_hours->start_at }}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="long_description">Ends At</label>
                                            <input type="time" name="ends_at" class="form-control" id="ends_at"
                                                placeholder="ends_at" value="{{ $working_hours->ends_at }}">
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
