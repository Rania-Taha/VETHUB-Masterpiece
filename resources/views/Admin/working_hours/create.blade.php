@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left: 290px; width: 75%">
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
                                <h4>Add Working Hours</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ url('workHours') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label for="clinic_id">Clinic Name</label>
                                                    <select name="clinic_id" id="clinic_id" class="form-control">
                                                        <option value="">Select Clinic</option>
                                                        @foreach ($clinic as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('clinic_id')
                                                        <div class="text-danger small">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-5">
                                                    <label for="day">Day</label>
                                                    <select name="day" id="day" class="form-control">
                                                        <!-- Options for days -->
                                                    </select>
                                                    @error('day')
                                                        <div class="text-danger small">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-5">
                                                    <label for="start_at">Starts At</label>
                                                    <input type="time" name="start_at" class="form-control"
                                                        id="start_at" placeholder="Enter Start At Hour">
                                                    @error('start_at')
                                                        <div class="text-danger small">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-5">
                                                    <label for="ends_at">Ends At</label>
                                                    <input type="time" name="ends_at" class="form-control" id="ends_at"
                                                        placeholder="Ends At">
                                                    @error('ends_at')
                                                        <div class="text-danger small">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div>
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
