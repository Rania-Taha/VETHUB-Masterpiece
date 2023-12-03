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
                                            <div class="form-group col-md-8">
                                                <label for="clinic_id">Clinic Name</label>
                                                <select name="clinic_id" id="clinic_id" class="form-control">
                                                    <option value="">Select Clinic</option>
                                                    @foreach ($clinic as $item)
                                                        <option value=" {{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>  @error('clinic_id')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="time">Time</label>
                                                    <input type="text" name="time" class="form-control"
                                                        id="time" placeholder="Enter Start At Hour">
                                                        @error('time')
                                                        <div class="text-danger small">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                              
                                                <div class="form-group col-md-4">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>

                                                    </select>
                                                    @error('status')
                                                    <div class="text-danger small">{{ $message }}</div>
                                                    @enderror
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
