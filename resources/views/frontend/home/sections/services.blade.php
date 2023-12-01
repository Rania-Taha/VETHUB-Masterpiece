  <!-- Services Start -->

  <div class="container-fluid pt-5">
      <div class="container py-5">
          <div class="d-flex flex-column text-center mb-5">
              <h1 class="display-4 m-0">
                  <span class="text-primary">Premium</span> Pet Services
              </h1>
              <br />
              <h4>Your Source for Local Veterinarians and Pet Health Guidance.</h4>
          </div>
          <div class="row justify-content-center align-items-center pb-3">
              <!-- Modified line -->
              @foreach ($category as $item)
                  <div class="col-md-6 col-lg-4 mb-4">
                      <div class="service-card d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                          <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                          
                              <div class="image">
                                  <a href="">
                                      <img src="{{ asset($item->image) }}" style="height: 90px; width: 90px;">
                                  </a>
                              </div>
                              <br>
                              <h3 class="mb-3">{{ $item->name }}</h3>
                              <p>
                                  {{ $item->short_description }}
                              </p>
                              {{-- <a href="($item->name== 'Veterinary Clinics')?{{route('clinics')}}:{{route('ask_a_vet')}}" class="see-more-link text-uppercase font-weight-bold">Discover More</a> --}}
                              <a href="{{ $item->name === 'Veterinary Clinics' ? route('clinics') : route('ask_a_vet') }}" class="see-more-link text-uppercase font-weight-bold">Discover More</a>

                          </div>
                      </div>
                  </div>
              @endforeach

          </div>
      </div>
  </div>
  <br />

  <!-- Services End -->
  {{-- <script>
      $(document).ready(function() {
          $(".see-more-link").on("click", function(e) {
              e.preventDefault();

              $(".short-description").toggle();
              $(".full-description").toggle();

              const linkText = $(this).text();
              $(this).text(linkText === "Read More" ? "Read Less" : "Read More");
          });
      });
  </script> --}}
  {{-- <style>
    .service-card {
        max-height: 600px; 
        overflow: hidden; 
        transition: max-height 0.1s ease-in-out; 
    }
    .service-card.expanded {
        max-height: none; 
    }
</style>
  <script>
    $(document).ready(function() {
        $(".see-more-link").on("click", function(e) {
            e.preventDefault();

            const card = $(this).closest('.service-card');
            card.find(".short-description").toggle();
            card.find(".full-description").toggle();

            const linkText = $(this).text();
            $(this).text(linkText === "Read More" ? "Read Less" : "Read More");
        });
    });
</script> --}}
