@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            <div class="section-header">
                <h1>Working Hours</h1>

            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h4>Add a Working Hours</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ url('workHours') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
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
                                                    <select name="day" id="day" class="form-control">
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
                                                        id="start_at" placeholder="Enter Start At Hour">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="long_description">Ends At</label>
                                                    <input type="time" name="ends_at" class="form-control" id="ends_at"
                                                        placeholder="ends_at">
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
