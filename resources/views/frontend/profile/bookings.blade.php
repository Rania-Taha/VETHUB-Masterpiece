<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="container-xxl flex-grow-1 container-p-y">
        <br>
        <br>
        <h3 class="form_title mb_30">Upcoming Appointments</h3>
        <br>        <br>

        @if (count($bookings) > 0)
            <div>
                <div class="checkout_table table-responsive">
                    <table class="table text-center mb_50">
                        <thead class="text-uppercase text-uppercase">
                            <tr>
                                <th>Number</th>
                                <th>Clinic/Video Call</th>
                                <th>Date</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $index => $book)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $book->clinicName() }}</td>
                                    <td>{{ $book->date }} <br>{{ $book->time }}</td>
                                    <td>0 JOD</td>
                                    <td>
                                        <button type="submit" class="btn btn-success"
                                            onclick="openReviewModal({{ $book->id }})">Review</button>
                                        @if (now()->diffInMinutes($book->created_at) <= 1)
                                            <form method="POST" action="{{ url('/book' . '/' . $book->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger "
                                                    title="Delete Working Hours"
                                                    onclick="return confirm('Confirm delete?')"> Delete</button>
                                            </form>
                                        @else
                                            <span style="font-size:14px; margin-left: 7px"> If you want to delete  this appointment <br><span style="margin-left: 50px">contact the clinic.</span>  </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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

    <style>
        /* Add a fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    <div id="reviewModal"
        style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4); padding-top: 60px;">
        <div
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 45%; background-color: #fefefe; padding: 20px; border: 1px solid #888; border-radius: 10px; animation: fadeIn 0.5s ease-out;">
            <span style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;"
                onclick="closeReviewModal()">&times;</span>
            <form id="reviewForm" method="POST" action="{{ route('reviews.store') }}">
                @csrf
                <center>
                    <!-- Your review form fields here -->
                    <div style="margin-bottom: 20px;">
                        <span id="clinicNameDisplay"></span>
                    </div>


                    <input type="hidden" name="id" value="{{ $book->id }}" />

                    <div style="margin-bottom: 20px;">
                        <label for="rating" style="margin-right: 10px;">Rating:</label>
                        <br>
                        <!-- Use Unicode star characters for star ratings -->
                        <div onclick="setRating(event)">
                            <span data-rating="1"
                                style="cursor: pointer; display: inline-block; position: relative; width: 40px; color: grey; font-size: 30px;"
                                class="rating-star"><i class="fas fa-paw"></i></span>
                            <span data-rating="2"
                                style="cursor: pointer; display: inline-block; position: relative; width: 40px; color: grey; font-size: 30px;"
                                class="rating-star"><i class="fas fa-paw"></i></span>
                            <span data-rating="3"
                                style="cursor: pointer; display: inline-block; position: relative; width: 40px; color: grey; font-size: 30px;"
                                class="rating-star"><i class="fas fa-paw"></i></span>
                            <span data-rating="4"
                                style="cursor: pointer; display: inline-block; position: relative; width: 40px; color: grey; font-size: 30px;"
                                class="rating-star"><i class="fas fa-paw"></i></span>
                            <span data-rating="5"
                                style="cursor: pointer; display: inline-block; position: relative; width: 40px; color: grey; font-size: 30px;"
                                class="rating-star"><i class="fas fa-paw"></i></span>
                        </div>
                        <input type="hidden" name="rating" id="starRating" value="0" />
                    </div>
                    <br>
                    <div style="margin-bottom: 20px;">
                        <label for="comment">Review:</label>
                        <br>
                        <!-- Larger text area for the review -->
                        <textarea name="comment" placeholder="Write your review" style="width: 330px"></textarea>
                    </div>

                    <button type="submit"
                        style="background-color: #28a745; color: #fff; padding: 10px 15px; border: none; cursor: pointer;">Submit
                        Review</button>
                </center>
            </form>

        </div>
      </div>
     @else
    <p>No upcoming appointments.</p>
    @endif
</div>
</div>





<script>
    function openReviewModal(bookId) {
        var clinicRow = document.querySelector(`tr[data-book-id="${bookId}"]`);
        var clinicName = clinicRow ? clinicRow.getAttribute('data-clinic-name') : '';
        document.getElementById('clinicNameDisplay').textContent = 'Add a Review to ' + clinicName;
        document.getElementById('reviewModal').style.display = 'block';
    }

    function closeReviewModal() {
        document.getElementById('reviewModal').style.display = 'none';
    }

    window.onclick = function(event) {
        var modal = document.getElementById('reviewModal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    }
</script>

<script>
    function setRating(event) {
        const stars = document.querySelectorAll('.rating-star');
        const mouseX = event.clientX;

        stars.forEach((star) => {
            const rect = star.getBoundingClientRect();
            const starCenterX = rect.left + rect.width / 2;

            if (mouseX >= starCenterX) {
                star.style.color = '#ED6436';
                star.setAttribute('data-rated', 'true');
            } else {
                star.style.color = 'grey';
                star.removeAttribute('data-rated');
            }
        });

        const selectedStars = document.querySelectorAll('.rating-star[data-rated="true"]').length;
        document.getElementById('starRating').value = selectedStars;
    }
</script>

@push('scripts')
    <script>
        function confirmDeleteAndSubmit(url, formId) {
            if (confirm('Are you sure you want to delete this booking?')) {
                // Get the form by its ID
                var form = document.getElementById(formId);

                // Set the form action to the delete URL
                form.action = url;

                // Submit the form
                form.submit();
            }
        }
    </script>
@endpush
