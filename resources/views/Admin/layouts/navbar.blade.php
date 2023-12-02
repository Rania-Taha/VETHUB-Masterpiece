  <!-- Main Wrapper -->
  <div class="main-wrapper">

  <!-- Header -->
  <div class="header">

  <!-- Logo -->
  <div class="header-left">
  {{-- <img src="assets/img/logoo.png" alt="Logo" width="210" height="60" style="margin-left: -10px ; margin-top: 15px"> --}}
  <h3 style=" margin-top: 20px"> VetHub</h3>
  {{-- <a href="index.html" class="logo" >
						
						<h1 class="m-1 display-5 text-capitalize" style="color: black; font-family: 'Liberation Mono', 'Courier New', monospace; font-weight: bold">
							<span style="color: rgb(238, 111, 7);">Vet</span>Hub
						</h1>
						
					</a> --}}
  <a href="index.html" class="logo logo-small">
  <img src="assets/img/logoo.png" alt="Logo" width="30" height="30">
  </a>
  </div>
  <!-- /Logo -->

  <!-- <a href="javascript:void(0);" id="toggle_btn">
     <i class="fe fe-text-align-left"></i>
    </a>
    -->


  <!-- Mobile Menu Toggle -->
  <a class="mobile_btn" id="mobile_btn">
  <i class="fa fa-bars"></i>
  </a>
  <!-- /Mobile Menu Toggle -->

  <!-- Header Right Menu -->
  <ul class="nav user-menu" style="margin-right: 20px">


  <!-- User Menu -->
  <li class="nav-item dropdown has-arrow" style="margin-right: 15px">
  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
  {{-- <span class="user-img"><img src="{{ asset($user->image) }}" width="45" height="45" alt="Rania Taha"></span> --}}
  </a>
  <div class="dropdown-menu">
  <div class="user-header">
  <div>
  {{-- <h6>{{$user->first_name}} {{$user->last_name}}</h6> --}}
  <span class="text-muted mb-0">Administrator</span>
  </div>
  </div>
  <a class="dropdown-item" href="{{ route('admin_profile') }}">My Profile</a>

  </div>
  </li>
  <!-- /User Menu -->
  <li>
  <form method="POST" action="{{ route('logoutAdmin') }}">
  @csrf
  <button type="submit" class="btn btn-md btn-primary mt-4 mt-md-3 px-3"
  href="{{ route('logoutAdmin') }}">Logout</button>

  </form>
  </li>
  </ul>
  <!-- /Header Right Menu -->

  </div>
  <!-- /Header -->
