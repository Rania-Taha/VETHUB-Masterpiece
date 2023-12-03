
@extends('provider.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75% ;margin-top:70px" >
        
    
        <section class="section">
            <div class="section-header">
                <h1>My Clinic</h1>
              
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Clinic</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('clinic.update', $clinic->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <br>
                                            
                                                <img width="150px" src="{{ asset($clinic->image) }}"> 
                                            </div> 
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" value="{{ $clinic->image }}"
                                                        class="form-control" id="image" placeholder="Choose an image">
                                                </div>
                                            </div>  
                                            @error('image')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="name">Name</label>
                                                    <input type="name" name="name" value="{{ $clinic->name }}"
                                                        class="form-control" id="inputEmail4" placeholder="Name">
                                                </div>
                                            </div>
                                            @error('name')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="description"> Description</label>
                                                    <textarea class="summernote-simple" name="description" id="description" placeholder="Enter a description" style="width: 700px ; height:80px">{{$clinic->description }}</textarea>


                                                </div>
                                            </div>
                                            @error('description')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="about">About</label>
                                                    <textarea class="summernote-simple" name="about" id="about" placeholder="Enter a about" style="width: 700px ; height:80px">{{$clinic->about }}</textarea>


                                                </div>
                                            </div>
                                            @error('about')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="location">Location</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="location" id="location" placeholder="Enter a location" style="width: 700px ; height:80px">{{$clinic->location }}</textarea>
                                                </div>
                                            </div>
                                            @error('location')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="location_map">Location map</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="location_map" id="location_map" placeholder="Enter a location map" style="width: 700px ; height:80px">{{$clinic->location_map }}</textarea>
                                                </div>
                                            </div>
                                            @error('location_map')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror

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
