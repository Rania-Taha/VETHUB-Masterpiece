

<div class="tab-pane fade" id="review" role="tab" aria-labelledby="review-tab">
    <div class="container-xxl flex-grow-1 container-p-y">
        <br>
        <br>        <br>

        
    @if (count($review) > 0)
    <div class="row">
        @php $counter = 0; @endphp <!-- Initializing a counter -->
        @foreach ($review as $item)
        <div class="col-md-12 mb-5 mb-md-4" style="margin-bottom: 20px;">
            <div style="border: 1px solid #ccc; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
                <p style="margin-bottom: 10px; font-weight: bold; font-size: 18px; color: #000;">
                    {{ ++$counter }}. <span style="font-size: 20px;">{{ $item->clinic->name }}</span> <br> <br>
                    <ul class="list-unstyled d-flex mb-0" style="font-size: 16px;">
                        @if ($item->rating >= 1 && $item->rating <= 5)
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $item->rating)
                                    <li>
                                        <i class="fas fa-paw fa-lg " style="color: #f17045;"></i>
                                    </li>
                                @else
                                    <li>
                                        <i class="fas fa-paw fa-lg" style="color: #ccc;"></i>
                                    </li>
                                @endif
                            @endfor
                        @else
                            <p>Invalid rating</p>
                        @endif
                    </ul><br>
                    <i class="fas fa-quote-left pe-2 text-muted"></i> <span class="text-muted">{{ $item->review_text }}</span>
                </p>
                <form method="POST" action="{{ url('/review' . '/' . $item->id) }}" accept-charset="UTF-8" style="display: inline;">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit"
        class="btn btn-md"
        style="background-color: #f8d7da; color: #721c24; border-color: #f5c6cb;"
        title="Delete Working Hours"
        onclick="return confirm('Confirm delete?')">Delete</button>

                </form>
            </div>
        </div>
    @endforeach
    
    </div>
    
</div>

  
  
    @else
<p>You have not posted any Review Yet.</p>
@endif
<br><br>
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
    

