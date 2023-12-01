@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            

            <div class="section-body">
                <div class="section-header" >
                <h1>Blogs</h1>
               
            </div>
                <div class="row">
                    <div class="col-12">
                        <br> 
                        <div class="card">
                            <div class="card-header">
                                <h4>Add a Blog</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ url('blog') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image1">Image 1</label>
                                                    <input type="file" name="image1" class="form-control" id="image1"
                                                        placeholder="Choose an image">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image2">Image 2</label>
                                                    <input type="file" name="image2" class="form-control" id="image2"
                                                        placeholder="Choose an image">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="title">Title</label>
                                                    <input type="title" name="title" class="form-control"
                                                        id="inputEmail4" placeholder="Title">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="short_description">Description</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="short_description" id="short_description" placeholder="Enter a description" style="width: 700px ; height:80px"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="section1">Section 1</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="section1" id="section1" placeholder="Enter Section 1" style="width: 700px ; height:100px"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="section2">Section 2</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="section2" id="section2" placeholder="Enter Section 2" style="width: 700px ; height:100px"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="section3">Section 3</label>
                                                    <br>
                                                    <textarea class="summernote-simple" name="section3" id="section3" placeholder="Enter Section 3" style="width: 700px ; height:100px"></textarea>
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
