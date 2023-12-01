<div class="sidebar" id="sidebar" style="width: 267px;">
    <div class="sidebar-inner slimscroll" style="margin-top: 5px;">
        <style>
            /* Reset default list styles */
            .sidebar-menu ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            /* Sidebar links styles */
            .sidebar-menu ul li {
                border-bottom: none;
            }

            .sidebar-menu ul li a {
                display: block;
                padding: 10px 16px;
                color: #333;
                font-size: 14px;
                text-decoration: none;
                transition: all 0.3s ease;
            }

            .sidebar-menu ul li a i {
                margin-right: 8px;
            }

            /* Sidebar links hover effect */
            .sidebar-menu ul li a:hover {
                background-color: #f5f5f5;
                color: #000;
            }

            /* Active link styles */
            .sidebar-menu ul li a.active {
                background-color: #b51313;
                color: #000;
                font-weight: bold;
            }

            /* Group headers */
            .group-header {
                padding: 8px 16px;
                color: #777;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 12px;
            }
        </style>

        <!-- Sidebar menu -->
        <div id="sidebar-menu" class="sidebar-menu">
            <br>
            <ul>
                <!-- Dashboard Group -->
               
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="dashboard" class="nav-link">
                        <i class="fa fa-paw"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- Users Group -->
               
                <li class="{{ request()->is('user') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ route('user.index') }}">
                        <i class="fe fe-users"></i>
                        <span>Users</span>
                    </a>
                </li>
                <!-- Services Group -->
                
                <li class="{{ request()->is('category') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('category.index') }}">
                        <i class="fa fa-medkit"></i>
                        <span>Services</span>
                    </a>
                </li>
                <!-- Clinics Group -->
                <li >
                    <div class="group-header">Clinics</div>
                </li>
                <li class="{{ request()->is('clinic') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('clinic.index') }}">
                        <i class="fa fa-hospital-o"></i>
                        <span>Clinics</span>
                    </a>
                </li>
                <li class="{{ request()->is('clinicService') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('clinicService.index') }}">
                        <i class="fa fa-briefcase"></i>
                        <span>Clinics Services</span>
                    </a>
                </li>
                <li class="{{ request()->is('workHours') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('workHours.index') }}">
                        <i class="fa fa-clock-o"></i>
                        <span>Clinics Working Hours</span>
                    </a>
                </li>
                <li class="{{ request()->is('clinicVet') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('clinicVet.index') }}">
                        <i class="fa fa-stethoscope"></i>
                        <span>Clinics Vets</span>
                    </a>
                </li>
                <!-- Bookings Group -->
                <li>
                    <div class="group-header">Bookings</div>
                </li>
                <li class="{{ request()->is('book') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('book.index') }}">
                        <i class="fa fa-calendar-plus-o"></i>
                        <span>Bookings</span>
                    </a>
                </li>
                <li class="{{ request()->is('schedule') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('schedule.index') }}">
                        <i class="fa fa-clock-o"></i>
                        <span>Schedules</span>
                    </a>
                </li>
                <!-- Reviews & Blogs Group -->
                
                <li class="{{ request()->is('review') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('review.index') }}">
                        <i class="fa fa-comment"></i>
                        <span>Reviews</span>
                    </a>
                </li>
                <li class="{{ request()->is('blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog.index') }}">
                        <i class="fa fa-newspaper-o"></i>
                        <span>Blogs</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Sidebar menu -->
    </div>
</div>

{{-- <script>
    $(document).ready(function() {
        $('.sidebar-menu ul li a').on('click', function() {
            $('.sidebar-menu ul li a').removeClass('active');
            $(this).addClass('active');
        });

        // To set active on page load based on URL
        var currentLocation = window.location.href;
        $('.sidebar-menu ul li a').filter(function() {
            return this.href === currentLocation;
        }).addClass('active');
    });
</script> --}}
