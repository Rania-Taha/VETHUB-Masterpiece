<!-- Sidebar -->
<div class="sidebar" id="sidebar" style="width: 250px; ">
    <div class="sidebar-inner slimscroll" style="margin-top:22px;">
        <div id="sidebar-menu" class="sidebar-menu" >
            <ul>
                <li><a href="/" class="nav-link" ><i class="fa fa-paw" ></i><span>Dashboard</span></a></li>
                <li><a class="nav-link" href="{{ route('clinic.index') }}"><i class="fa fa-hospital-o"></i> <span>Clinic</span></a></li>
                <li><a class="nav-link" href="{{ route('clinicService.index') }}"><i class="fa fa-briefcase" ></i> <span> Clinic Services</span></a></li>
                <li><a class="nav-link" href="{{ route('workHours.index') }}"><i class="fa fa-clock-o" ></i> <span> Clinic Working Hours</span></a></li> 
                <li><a class="nav-link" href="{{ route('clinicVet.index') }}"><i class="fa fa-stethoscope" ></i> <span> Clinic Vets</span></a></li> 
                <li><a class="nav-link" href="{{ route('book.index') }}"><i class="fa fa-calendar-plus-o" ></i> <span> Bookings</span></a></li> 
                <li><a class="nav-link" href="{{ route('schedule.index') }}"><i class="fa fa-clock-o" ></i> <span> Schedules</span></a></li> 
                <li>
                    <a href="{{ route('provider_profile') }}"><i class="fe fe-user-plus" ></i> <span>Profile</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
