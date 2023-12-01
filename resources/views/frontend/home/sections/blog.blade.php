  <!-- Blog Start -->
  <div class="container pt-5">
    
    <div class="d-flex flex-column text-center mb-5">
      <h4 class="text-secondary mb-3">Pet Blog</h4>
      <h1 class="display-4 m-0">
        <span class="text-primary">Updates</span> From Blog
      </h1>
    </div>
    <div class="row pb-3">
      @foreach ($blog as $item)
      <div class="col-lg-4 mb-4">
        <div class="card border-0 mb-2">
          <img class="card-img-top" src="{{ asset($item->image1) }}" alt="" />
          <div class="card-body bg-light p-4">
            <a href="{{ route('single_blog', $item->id) }}"> 
              <h4 class="card-title text-truncate">
                  {{ $item->title }}
              </h4>
          </a>
          
            <p>
              {{$item->short_description}}
            </p>
            <a class="font-weight-bold" href="{{ route('single_blog',$item->id) }}">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    
    </div>
  </div>
  <!-- Blog End -->