
@extends('provider.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            <div class="section-header">
                <h1>Schedule</h1>
                {{-- <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Schedule</div>
                </div> --}}
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit</h4> Schedule </h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('schedule.update', $schedule->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="clinic_id">Clinic Id</label>
                                                    <select name="clinic_id" id="clinic_id" class="form-control">
                                                        
                                                        <option value="{{ $schedule->clinic_id }}"> {{ $schedule->clinic_id }}</option>
                                                        
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="time">Time</label>
                                                    <input type="text" name="time" class="form-control"
                                                        id="time" placeholder="Enter Start At Hour" value="{{ $schedule->time }}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status" class="form-control" value="{{ $schedule->status }}" >
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
