@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            

            <div class="section-body">
                <div class="section-header" >
                <h1>Reviews</h1>
               
            </div>
                <div class="row">
                    <div class="col-12">
                        <br> 
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit a Review</h4>
                            </div>
                            <div class="card-body p-0">
                                    <form action="{{ route('review.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            
                                           
                                                  <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="user_id">User Id</label>
                                                    <select name="user_id" id="user_id" class="form-control">
                                                        @foreach ($user as $item)
                                                        <option value="" > </option>
                                                        <option value="{{ $item->id }}"> {{ $item->id }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>

                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="review_text">Review Text</label>
                                                    <input type="text" name="review_text" class="form-control"
                                                        id="review_text" placeholder="Review Text" value="{{$review->review_text}}">
                                                </div>

                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="rating">Rating</label>
                                                    <input type="text" name="rating" class="form-control"
                                                        id="rating" placeholder="rating" value="{{$review->rating}}">
                                                </div>

                                            </div>
                   

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="clinic_id">Clinic Id</label>
                                                    <select name="clinic_id" id="clinic_id" class="form-control">
                                                        @foreach ($clinic as $item)
                                                        <option value="" > </option>
                                                        <option value="{{ $item->id }}"> {{ $item->id }}</option>
                                                        @endforeach
                                                    </select>
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
