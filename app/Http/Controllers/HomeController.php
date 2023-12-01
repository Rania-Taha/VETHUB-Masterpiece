<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

       
    $category = Category::all();
    $blog = Blog::all();
    
        if(Auth::check()){
            if(Auth::id()){
                $role=Auth()->user()->role;
    
                if($role=='user'){
                    return view('frontend.home.index', compact(['category','blog']));
                }
                else if ($role=='admin') {
                    return view('Admin.dashboard');
    
                } elseif ($role == 'provider') {
                    return view('provider.dashboard'); 
                }
            }  
        }
        else {
                    return  view('frontend.home.index', compact(['category','blog']));
                }
    }

}
