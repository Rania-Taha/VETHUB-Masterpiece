<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Traits\ImageUploadTrait;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Session;


class BlogController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();
        return view('Admin.blogs.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $request->validate([
            'image1' => ['required', 'image', 'max:4192'],
            'image2' => ['required', 'image', 'max:4192'],
            'title' => ['required', 'max:100'],
            'short_description' => ['required', 'max:1000'],
            'section1' => ['required'],
            'section2' => ['required'],
            'section3' => ['required'],
        ]);

       
        $blog = new Blog();

        $imagePath1 = $this->uploadImage($request, 'image1', 'uploads');
        $imagePath2 = $this->uploadImage($request, 'image2', 'uploads');


        $blog->image1 =  $imagePath1;
        $blog->image2 =  $imagePath2;
        $blog->title = $request->title;
        $blog->short_description = htmlspecialchars($request->short_description);
        $blog->section1 = htmlspecialchars($request->section1);
        $blog->section2 = htmlspecialchars($request->section2);
        $blog->section3 = htmlspecialchars($request->section3);

        $blog->save();
        
        Session::flash('success', 'Bolg created successfully!');
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     */
    // public function show()
    // {
    //     $blog = Blog::all();
    //     return view('Admin.blogs.index', compact('blog'));
    // }
    public function show1()
    {
        $blog = Blog::all();
        return view('frontend.blogs.blogs', compact('blog'));
    }

    public function show2($id)
    {
        $blog = Blog::find($id);
        return view('frontend.blogs.single_blog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog =  Blog::find($id);
        return view ('Admin.blogs.edit')->with('blog',  $blog);   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request,  $id)
    {
              $blog['title'] = $request->title;
              $blog['short_description'] = $request->short_description;
              $blog['section1'] = $request->section1;
              $blog['section2'] = $request->section2;
              $blog['section3'] = $request->section3;

    
            $filename1 = '';
            $filename2 = '';

    
            if ($request->hasFile('image1')) {
                $filename1 = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image1->extension();
                $request->image1->move(public_path('/assets/img/'), $filename1);
                  $blog['image1'] = $filename1;
            } else {
                unset(  $blog['image1']);
            }

            if ($request->hasFile('image2')) {
                $filename2 = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image2->extension();
                $request->image2->move(public_path('/assets/img/'), $filename2);
                  $blog['image2'] = $filename2;
            } else {
                unset(  $blog['image2']);
            }
           
             Blog::where(['id' => $id])->update($blog);
             Session::flash('success', 'Bolg Updatted successfully!');

            return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        Session::flash('success', 'Bolg deleted successfully!');

        return redirect ('blog');
    }
}
