@extends('Admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left: 290px; width: 75%; padding: 20px;">
        <section class="section">
            <div class="section-body">
                <div class="section-header">
                    <h1>Services</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit a service</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('clinicService.update', $clinic_service->id) }}" method="POST"
                                     enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group col-md-8">
                                                <label for="clinic_id">Clinic Name</label>
                                                <select name="clinic_id" id="clinic_id" class="form-control">
                                                    <option value="">Select Clinic</option>
                                                    @foreach ($clinics as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $clinic_service->clinic_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                            <!-- Replace 'clinic_name' with the actual field name -->
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('clinic_id')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <br>

                                                <img width="150px" src="{{ asset($clinic_service->image) }}">
                                            </div>


                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" class="form-control" id="image" placeholder="Choose an image">
                                                    @error('image')
                                                        <div class="text-danger small">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="service_name">Name</label>
                                                    <input type="name" name="service_name"
                                                        value="{{ $clinic_service->service_name }}" class="form-control"
                                                        id="inputEmail4" placeholder="Name">
                                                </div>
                                            </div>
                                            @error('service_name')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="short_description"> Description</label>
                                                    <textarea class="summernote-simple" name="description" id="description" placeholder="Enter a description"
                                                        style="width: 700px ; height:80px">{{ $clinic_service->description }}</textarea>
                                                </div>
                                            </div>
                                            @error('short_description')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <div >
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
