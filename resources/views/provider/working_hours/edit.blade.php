
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
     
                                        <div class="form-group col-md-6">
                                            <label for="day">Day</label>
                                            <select name="day" id="day" class="form-control">
                                                <option value="">Select Day</option>
                                                <option value="Sunday" {{ $working_hours->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                                                <option value="Monday" {{ $working_hours->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                                                <option value="Tuesday" {{ $working_hours->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                                <option value="Wednesday" {{ $working_hours->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                                <option value="Thursday" {{ $working_hours->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                                <option value="Friday" {{ $working_hours->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                                                <option value="Saturday" {{ $working_hours->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                            </select>
                                            @error('day')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="start_at">Starts At</label>
                                            <input type="time" name="start_at" class="form-control" id="start_at"
                                                placeholder="Enter Start At Hour"
                                                value="{{ $working_hours->start_at }}">
                                            @error('start_at')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="long_description">Ends At</label>
                                            <input type="time" name="ends_at" class="form-control" id="ends_at"
                                                placeholder="Ends At" value="{{ $working_hours->ends_at }}">
                                            @error('ends_at')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
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
