@extends('frontend.layouts.master')
 

@section('content')

<!-- Clinics section pawt -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h1 class="text-primary"> Veterinary Clinics</h1>
        <br>
        @foreach ($category as $items)
        @if ($items->name === 'Veterinary Clinics')
            <p style="font-size: 20px; color:black">{{ $items->long_description }}</p>
        @endif
    @endforeach

    <br>
       <!-- Search input -->
       <div class="mt-4" style="width: 700px">
        <form action="{{ url()->current() }}" method="GET">
          <div class="input-group mb-3">
                <div class="input-group-prepend" style="margin-right: 10px">
                    <select class="form-select" name="criteria" style="padding: 0.5rem 2rem 0.5rem 1rem; font-size: 1rem; border: 1px solid #ced4da; border-radius: 0.25rem; background-color: #fff; color: #495057; cursor: pointer;">
                        <option value="name">Search by Name</option>
                        <option value="location">Search by Location</option>
                    </select>
                </div> 
                <input type="text" class="form-control" placeholder="Enter search query..." name="query" style="padding: 1rem; font-size: 1rem; border: 1px solid #ced4da; border-radius: 0.25rem;">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    <div class="row mt-5">
      @if ($all_clinics->isEmpty())
      <div class="col-12 text-center">
          <p style="font-size: 25px">Sorry, No clinics found.</p>
          <br>
      <br>
      </div>
      

  @else
        @foreach ($all_clinics as $item)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-orange" style="width: 100%;">
                <img src="{{ asset($item->image) }}" class="card-img-top" alt="Clinic Image" >
                {{-- style="height: 90px; width: 90px;" --}}
                {{-- <img src="img/treaty.png" class="card-img-top" alt="Clinic Image" /> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <div class="rating-paws">
                        <div class="d-flex justify-content-center">
                            <p class="mr-2 text-dark">Rating:</p>
                            <p>
                                <i class="fas fa-paw text-primary"></i>
                                <i class="fas fa-paw text-primary"></i>
                                <i class="fas fa-paw text-primary"></i>
                                <i class="fas fa-paw text-primary"></i>
                                <i class="fas fa-paw text-primary"> </i>
                                25 Review
                            </p>
                        </div>
                    </div>
                    <p class="text-center">{{ $item->location }}</p>
                    <a href="{{ route('single_clinic',$item->id) }}" class="btn btn-lg btn-primary mt-3 mt-md-4 px-3">See Details</a>

                    <!-- <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-2">See Details</a> -->
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
<br>


   
<div style="text-align: center;">
  <div style="padding-bottom: 10px; font-size: 14px; display: flex; justify-content: center;">
      {{ $all_clinics->links() }}
  </div>
</div>

</div>



<!-- Clinics section End -->
@endsection
