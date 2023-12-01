<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clinic;
use App\Traits\ImageUploadTrait;


use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = User::paginate(5); // Fetch users with pagination, 10 users per page
        $user = User::all();
        $clinics=Clinic::all();
        return view('Admin.users.index', compact('user', 'clinics','page'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
                $user = User::all();
                $clinics=Clinic::all();
                return view('Admin.users.create', compact('user', 'clinics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $request->validate([
           
            'first_name' => ['required', 'max:20'],
            'last_name' => ['required', 'max:20'],
            'email' => ['required', 'max:20'],
            'password' => ['required', 'max:18'],
            'address' => ['required', 'max:50'],
            'phone' => ['required', 'max:10'],
            'image' => ['required', 'image', 'max:4192'],
            'role' => ['required', 'max:50'],
        ]);

       
        $user = new User();
        $imagePath = $this->uploadImage($request, 'image', 'uploads');
        $user->image =  $imagePath;
       
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->clinic_id = $request->clinic_id;


        

        $user->save();
        
        // toastr('Created Successfully!', 'success');
        return redirect('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
        $user =  User::find($id);
        $clinic = Clinic::all();
        return view('Admin.users.edit', compact('user', 'clinic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, $id)
    {
             $user['first_name'] = $request->first_name;
             $user['last_name'] = $request->last_name;
             $user['email'] = $request->email;
             $user['password'] = $request->password;
             $user['address'] = $request->address;
             $user['phone'] = $request->phone;
             $user['role'] = $request->role;
             $user['clinic_id'] = $request->clinic_id;
             
            $filename = '';
    
            if ($request->hasFile('image')) {
                $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
                $request->image->move(public_path('/assets/img/'), $filename);
                 $user['image'] = $filename;
            } else {
                unset( $user['image']);
            }
           

             User::where(['id' => $id])->update( $user);
            return redirect('user')->with('flash_message', 'user Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect ('user')->with('flash_message', 'User deleted!');
    }
}
