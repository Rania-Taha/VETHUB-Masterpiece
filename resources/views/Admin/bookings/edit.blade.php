@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content" style="margin-left:290px ; width:75%">
        <section class="section">
            

            <div class="section-body">
                <div class="section-header" >
                <h1>Bookings</h1>
               
            </div>
                <div class="row">
                    <div class="col-12">
                        <br> 
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit a Booking</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="user_id">User Id</label>
                                                    <select name="user_id" id="user_id" class="form-control">
                                                        @foreach ($user as $item)
                                                        <option value="{{ $item->id }}"> {{ $item->id }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>

                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="date">Booking Date</label>
                                                    <input type="date" name="date" class="form-control"
                                                        id="date" placeholder="Booking Date" value="{{$book->date}}">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="time">Booking Time</label>
                                                    <input type="text" name="time" class="form-control"
                                                        id="time" placeholder="Booking Time" value="{{$book->time}}">
                                                </div>

                                            </div>
                                            
                                  

                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="schedule_id">Schedule Id</label>
                                                    <select name="schedule_id" id="schedule_id" class="form-control">
                                                        @foreach ($schedule as $item)
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
