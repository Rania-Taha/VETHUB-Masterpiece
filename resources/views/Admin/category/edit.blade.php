@extends('Admin.layouts.master')

@section('content')
    <div class="main-content" style="margin-left: 290px; width: 75%; padding: 20px;">
        <section class="section">
            <div class="section-body">
                <div class="section-header">
                    <h1>Category</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit a Category</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('category.update', $category->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <br>

                                                <img width="150px" src="{{ asset($category->image) }}">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" value="{{ $category->image }}"
                                                        class="form-control" id="image" placeholder="Choose an image">
                                                </div>

                                            </div>
                                            @error('image')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="name">Name</label>
                                                    <input type="name" name="name" value="{{ $category->name }}"
                                                        class="form-control" id="inputEmail4" placeholder="Name">
                                                </div>

                                            </div>
                                            @error('name')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="short_description">Short Description</label>
                                                    <textarea class="summernote-simple" name="short_description" id="short_description" placeholder="Enter a description"
                                                        style="width: 700px ; height:80px">{{ $category->short_description }}</textarea>
                                                </div>
                                            </div>
                                            @error('short_description')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="long_description">Long Description</label>
                                                    <textarea class="summernote-simple" name="long_description" id="long_description" placeholder="Enter a description"
                                                        style="width: 700px ; height:80px">{{ $category->long_description }}</textarea>
                                                </div>
                                            </div>
                                            @error('long_description')
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
