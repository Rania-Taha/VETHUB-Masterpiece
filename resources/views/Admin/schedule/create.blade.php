@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            <div class="section-header">
                <h1>Schedule</h1>

            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h4>Add a schedule</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ url('schedule') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">


                                            {{-- <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="clinic_id">Clinic Id</label>
                                                    <select name="clinic_id" id="clinic_id" class="form-control">

                                                        <option value="{{ $schedule->clinic_id }}">
                                                            {{ $schedule->clinic_id }}</option>

                                                    </select>
                                                </div>

                                            </div> --}}
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
                                                    <label for="time">Time</label>
                                                    <input type="text" name="time" class="form-control"
                                                        id="time" placeholder="Enter Start At Hour">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>

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
