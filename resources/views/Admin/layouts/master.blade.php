<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>VetHub - Dashboard</title>
		
		<!-- Favicon -->
        <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}"> 
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/feathericon.min.css') }}">
		
		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/morris/morris.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>


        @include('admin.layouts.navbar')

        @include('admin.layouts.sidebar')

        @yield('content')



<!-- jQuery -->


<script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js') }}"></script>
		
<!-- Bootstrap Core JS -->
<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('admin/assets/plugins/raphael/raphael.min.js') }}"></script>    
<script src="{{ asset('admin/assets/plugins/morris/morris.min.js') }}"></script>  
<script src="{{ asset('admin/assets/js/chart.morris.js') }}"></script>

<!-- Custom JS -->
<script  src="{{ asset('admin/assets/js/script.js') }}"></script>

<!-- Add this to your main layout or view file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script>
    // Check if there are toast messages in the session and display them using toastr
    @if(Session::has('success'))
        toastr.success('{{ Session::get("success") }}');
    @endif
</script>
    </body>

    <!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
    </html>