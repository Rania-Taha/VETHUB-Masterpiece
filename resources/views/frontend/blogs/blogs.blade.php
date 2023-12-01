@extends('frontend.layouts.master')

@section('content')
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">Pet Blog</h4>
        <h1 class="display-4 m-0"><span class="text-primary">Updates</span> From Blog</h1>
    </div>
    <div class="row pb-3">
        @foreach ($blog as $item)
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="{{ asset($item->image1) }}" alt="">
                <div class="card-body bg-light p-4">
                    <a href="{{ route('single_blog', $item->id) }}" style="text-decoration: none;">
                        <h4 class="card-title text-truncate">
                            {{ $item->title }}
                        </h4>
                    </a>
                    
                    {{-- <h4 class="card-title text-truncate">{{ $item->title }}</h4> --}}
                    <div class="d-flex mb-3">
                        <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                    </div>
                    <p>{{ $item->short_description }}</p>
                    <a class="font-weight-bold" href="{{ route('single_blog',$item->id) }}">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-lg-12">
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo; Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">Next &raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
    </div>
</div>
@endsection
