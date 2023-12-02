		<!-- Main Wrapper -->
        <div class="main-wrapper" >
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left" >
						<a href="index.html" class="logo" >
						<img src="assets/img/lo.JPG" alt="Logo" width="250" height="60">
						</a>
						
                </div>
			
			
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
			
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
            </div>
			<!-- /Header -->