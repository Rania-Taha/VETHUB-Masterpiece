<!-- Main Wrapper -->
<div class="main-wrapper">
  <!-- Header -->
  <div class="header" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; background-color: #fff;">
      <!-- Logo -->
      <div class="header-left" style="display: flex; align-items: center;">
          <h3 style="margin: 0;">VetHub</h3>
          <a href="index.html" class="logo logo-small" style="margin-left: 10px;">
              <img src="assets/img/logoo.png" alt="Logo" width="30" height="30">
          </a>
      </div>
      <!-- /Logo -->

      <!-- Mobile Menu Toggle -->
      <a class="mobile_btn" id="mobile_btn" style="font-size: 20px; cursor: pointer;">
          <i class="fa fa-bars"></i>
      </a>
      <!-- /Mobile Menu Toggle -->

      <!-- Header Right Menu -->
      <ul class="nav user-menu" style="list-style: none; display: flex; align-items: center; margin: 0;">
          <!-- User Menu -->
          <li class="nav-item dropdown has-arrow" style="margin-right: 15px;">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="fa fa-user-circle" style="font-size: 30px;"></i>
          </a>
              <div class="dropdown-menu" style="min-width: 150px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                  <div class="user-header" style="padding: 10px;">
                      <div>
                          <!-- Display user's name or role -->
                          <h6 style="margin: 0;">Administrator</h6>
                          <span class="text-muted mb-0">Administrator</span>
                      </div>
                  </div>
                  <a class="dropdown-item" href="{{ route('admin_profile') }}">My Profile</a>
              </div>
          </li>
          <!-- /User Menu -->
          <li>
              <form method="POST" action="{{ route('logoutAdmin') }}" style="margin: 0;">
                  @csrf
                  <button type="submit" class="btn btn-md btn-primary mt-4 mt-md-3 px-3" style="margin: 0; cursor: pointer;">
                      Logout
                  </button>
              </form>
          </li>
      </ul>
      <!-- /Header Right Menu -->
  </div>
  <!-- /Header -->
{{-- </div> --}}
<!-- /Main Wrapper -->
