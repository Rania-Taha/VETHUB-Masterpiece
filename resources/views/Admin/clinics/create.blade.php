@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            

            <div class="section-body">
                <div class="section-header" >
                <h1>Clinics</h1>
               
            </div>
                <div class="row">
                    <div class="col-12">
                        <br> 
                        <div class="card">
                            <div class="card-header">
                                <h4>Add a Clinic</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ url('clinic') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" class="form-control" id="image"
                                                        placeholder="Choose an image">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="name">Name</label>
                                                    <input type="name" name="name" class="form-control"
                                                        id="inputEmail4" placeholder="Name">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="description">Description</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="description" id="description" placeholder="Enter a description" style="width: 700px ; height:80px"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="about">About</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="about" id="about" placeholder="Enter a about" style="width: 700px ; height:80px"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="location">Location</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="location" id="location" placeholder="Enter a location" style="width: 700px ; height:80px"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="location_map">Location map</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="location_map" id="location_map" placeholder="Enter a location map" style="width: 700px ; height:80px"></textarea>
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
