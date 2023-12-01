
@extends('Admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            <div class="section-header">
                <h1>Category</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Service</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit</h4> Service</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('clinicService.update', $clinic_service->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <br>
                                            
                                                <img width="150px" src="{{ asset($clinic_service->image) }}"> 
                                            </div> 
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" value="{{ $clinic_service->image }}"
                                                        class="form-control" id="image" placeholder="Choose an image">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="service_name">Name</label>
                                                    <input type="name" name="service_name" value="{{ $clinic_service->service_name }}"
                                                        class="form-control" id="inputEmail4" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="short_description"> Description</label>
                                                    <textarea class="summernote-simple" name="description" id="description" placeholder="Enter a description" style="width: 700px ; height:80px">{{$clinic_service->description }}</textarea>
                                                </div>
                                            </div>
                                            {{-- <div class="form-group col-md-8">
                                                <label for="clinic_id">Clinic Id</label>
                                            <select name="clinic_id" id="clinic_id" class="form-control" > 
                                                <option value=""> </option>
                                                <option value="{{ $clinic_service->clinic_id }}"> {{ $clinic->clinic_id }} </option>
                                            </select>
                                            </div> --}}
                                           
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
