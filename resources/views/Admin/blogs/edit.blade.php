
@extends('Admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            <div class="section-header">
                <h1>Clinics</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Blogs</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit</h4> Blogs</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <br>
                                            
                                                <img width="150px" src="{{ asset($blog->image1) }}"> 
                                                 
                                            </div> 
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image1">Image 1</label>
                                                    <input type="file" name="image1" value="{{ $blog->image1 }}"
                                                        class="form-control" id="image1" placeholder="Choose an image">
                                                </div>
                                              
                                            </div>
                                            @error('image1')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                            
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <br>
                                            
                                                <img width="150px" src="{{ asset($blog->image2) }}"> 
                                                 
                                            </div> 
                                     
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image2">Image 2</label>
                                                    <input type="file" name="image2" value="{{ $blog->image2 }}"
                                                        class="form-control" id="image2" placeholder="Choose an image">
                                                </div>
                                                
                                            </div>
                                            @error('image2')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="title">Title</label>
                                                    <input type="title" name="title" class="form-control" value="{{ $blog->title }}"
                                                        id="title" placeholder="Title">
                                                </div>
 
                                            </div>
                                            @error('title')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                           



                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="short_description"> Description</label>
                                                    <textarea class="summernote-simple" name="short_description" id="short_description" placeholder="Enter a description" style="width: 700px ; height:80px">{{$blog->short_description }}</textarea>


                                                </div>  
                                            </div>
                                            @error('short_description')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                          
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="section1">Section 1</label>
                                                    <textarea class="summernote-simple" name="section1" id="section1" placeholder="Enter section 1" style="width: 700px ; height:80px">{{$blog->section1 }}</textarea>


                                                </div>     
                                            </div>
                                            @error('section1')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                      
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="section2">Section 2</label>
                                                    <textarea class="summernote-simple" name="section2" id="section2" placeholder="Enter section 2" style="width: 700px ; height:80px">{{$blog->section2 }}</textarea>
                                                </div> 
                                            </div>
                                            @error('section2')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                           
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="section3">Section 3</label>
                                                    <textarea class="summernote-simple" name="section3" id="section3" placeholder="Enter section 3" style="width: 700px ; height:80px">{{$blog->section3 }}</textarea>
                                                </div>  
                                            </div>
                                            @error('section3')
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
