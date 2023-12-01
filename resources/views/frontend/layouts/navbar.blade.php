<!-- Navbar Start -->
<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
      <a href="index.html" class="navbar-brand d-block d-lg-none">
          <h1 class="m-0 display-5 text-capitalize font-italic text-white">
              <span class="text-primary">Vet</span>Hub
          </h1>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse px-3 " id="navbarCollapse">
          <a href="{{ route('home') }}" class="navbar-brand d-none d-lg-block brand">
            <h1 class="m-0 display-5 text-capitalize font-italic text-white">
                <span class="text-primary">Vet</span>Hub
            </h1>          </a>
          <div style="width: 160px;"></div>
          <div class="navbar-nav py-0">
              <a href="{{ route('home') }}" class="nav-item nav-link @if (request()->is('/')) active @endif">Home</a>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @if (request()->is('clinic_') || request()->is('ask_a_vet')) active @endif" data-toggle="dropdown">Service</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ route('clinics') }}" class="dropdown-item">Vet Clinics</a>
                    <a href="{{ route('ask_a_vet') }}" class="dropdown-item">Ask a Vet</a>
                </div>
            </div>
            <a href="{{ route('blog_website') }}" class="nav-item nav-link @if (request()->is('blog_website')) active @endif">Blog</a>

              <a href="{{ route('about') }}" class="nav-item nav-link @if (request()->is('about')) active @endif">About</a>
            
            
              <a href="{{ route('contact') }}" class="nav-item nav-link @if (request()->is('contact')) active @endif">Contact</a>

              @if (Route::has('login'))
                  @auth
                      <!-- Placeholder for authenticated user dropdown -->
                      <li class="nav-item dropdown" style="margin-left: 210px">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              My Account
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="{{ route('user_profile') }}">Profile</a></li>
                              <li>
                                  <form method="POST" action="{{ route('logout') }}">
                                      @csrf
                                      <button type="submit" class="dropdown-item" href="{{ route('logout') }}">Logout</button>
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @else
                      <!-- User is not logged in -->
                      <li style="margin-left: 190px"><a id="loginbnt" class="btn btn-md btn-primary mt-3 mt-md-4 px-4" href="{{ route('login') }}">Login</a></li>
                  @endauth
              @endif
          </div>
      </div>
  </nav>
</div>

<script>
  // Function to handle link clicks
  function handleLinkClick(link) {
      // Remove 'active' class from all links
      document.querySelectorAll('.navbar-nav .nav-item .nav-link').forEach(el => {
          el.classList.remove('active');
      });

      // Add 'active' class to the clicked link
      link.classList.add('active');
  }

  // Get all navigation links
  let navLinks = document.querySelectorAll('.navbar-nav .nav-item .nav-link');

  // Attach click event listeners to each navigation link
  navLinks.forEach(link => {
      link.addEventListener('click', function(event) {
          // Remove 'active' class from all links and add to the clicked link
          handleLinkClick(link);
      });
  });

  // Mark initial active link based on current URL
  let currentPath = window.location.pathname;
  navLinks.forEach(link => {
      if (link.getAttribute('href') === currentPath) {
          link.classList.add('active');
      }
  });
</script>
<!-- Navbar End -->
