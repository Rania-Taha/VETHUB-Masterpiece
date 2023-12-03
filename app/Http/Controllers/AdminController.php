<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clinic;
use App\Models\Blog;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function dashboard()
    {
    
        $usersCount = User::count();
        $clinicsCount = Clinic::count();
        $blogsCount = Blog::count();

        View::share('usersCount', $usersCount);
        View::share('clinicsCount', $clinicsCount);
        View::share('blogsCount', $blogsCount);

    // Get the authenticated user's name
    $userName = Auth::user()->first_name;

    // Pass the counts and user's name to the view
    return view('Admin.dashboard', compact('usersCount', 'clinicsCount', 'blogsCount', 'userName'));

    }

    public function provider()
    {
    
        
        $bookingsCount = Booking::count();

      
        View::share('bookingsCount', $bookingsCount);

    // Get the authenticated user's name
    $userName = Auth::user()->first_name;


    // Pass the counts and user's name to the view
    return view('provider.dashboard', compact('bookingsCount', 'userName'));

    }
}
