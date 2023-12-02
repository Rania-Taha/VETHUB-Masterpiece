<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clinic;
use App\Traits\ImageUploadTrait;

use Illuminate\Support\Facades\Session;

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
        $page = User::paginate(5); 
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
        'first_name' => ['required', 'string', 'max:50'],
        'last_name' => ['required', 'string', 'max:50'],
        'email' => ['required', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'max:255'],
        'address' => [ 'string', 'max:255'],
        'phone' => [ 'string', 'max:20'],
        'image' => [ 'image', 'max:4192'],
        'role' => ['required', 'string', 'max:50'],
        'clinic_id' => ['nullable', 'exists:clinics,id'],
    ]);

    $user = new User();
    $imagePath = $this->uploadImage($request, 'image', 'uploads');
    $user->image = $imagePath;
   
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->address = $request->address;
    $user->phone = $request->phone;
    $user->role = $request->role;
    $user->clinic_id = $request->clinic_id;
    $user->save();
    
    Session::flash('success', 'User created successfully!');

       return redirect('user');
}


    /**
     * Display the specified resource.
     */
    public function show()
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
             Session::flash('success', 'User Updated successfully!');

            return redirect('user');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('success', 'User Deleted successfully!');

        return redirect ('user');
    }
}
