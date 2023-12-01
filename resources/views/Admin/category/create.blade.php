@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            <div class="section-header">
                <h1>Category</h1>
               
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
                                <form action="{{ url('category') }}" method="POST" enctype="multipart/form-data">
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
                                                    <label for="short_description">Short Description</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="short_description" id="short_description" placeholder="Enter a short description" style="width: 700px ; height:80px"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="long_description">Long Description</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="long_description" id="long_description" placeholder="Enter a long description" style="width: 700px ; height:80px"></textarea>
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
