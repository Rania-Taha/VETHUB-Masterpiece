<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Traits\ImageUploadTrait;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;



class CategoryController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view ('Admin.category.index')->with('category', $category);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
         $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'name' => ['required', 'max:20'],
            'short_description' => ['required', 'max:500'],
            'long_description' => ['required', 'max:1000'],
        ]);

       
        $category = new Category();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $category->image =  $imagePath;
        $category->name = $request->name;
        $category->short_description = htmlspecialchars($request->short_description);
        $category->long_description = htmlspecialchars($request->long_description);

        $category->save();
        
        // toastr('Created Successfully!', 'success');
        return redirect('category');
       

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view ('Admin.category.edit')->with('category', $category);
     }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request,  $id)
    {
           
           
            $category['name'] = $request->name;
            $category['short_description'] = $request->short_description;
            $category['long_description'] = $request->long_description;

    
            $filename = '';
    
            if ($request->hasFile('image')) {
                $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
                $request->image->move(public_path('/assets/img/'), $filename);
                $category['image'] = $filename;
            } else {
                unset($category['image']);
            }
           

            Category::where(['id' => $id])->update($category);
            return redirect('category')->with('flash_message', 'student Updated!');  
          }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect ('category')->with('flash_message', 'Category deleted!'); 
         }
}
