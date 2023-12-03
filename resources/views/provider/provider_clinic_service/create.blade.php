@extends('provider.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            <div class="section-header">
                <h1>clinic Services</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h4>Add a Service</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ url('clinicService') }}" method="POST" enctype="multipart/form-data">
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
                                            @error('image')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="service_name">Name</label>
                                                    <input type="service_name" name="service_name" class="form-control"
                                                        id="inputEmail4" placeholder="Name">
                                                </div>

                                            </div>
                                            @error('service_name')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="description">Description</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="description" id="description" placeholder="Enter a description"
                                                        style="width: 700px ; height:80px"></textarea>
                                                </div>
                                            </div>
                                            @error('description')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror


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
