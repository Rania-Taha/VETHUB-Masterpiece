<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
       
    $category = Category::all();
    $blog = Blog::all();
            return view('frontend.home.index', compact(['category','blog']));  

    }

}
