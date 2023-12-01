<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminProfileController extends Controller
{
    public function index(){
        if(Auth::id()){
            $user=User::find(Auth::id());
            session()->put('first_name', Auth()->user()->first_name);
            session()->put('last_name', Auth()->user()->last_name);
            session()->put('image',Auth()->user()->image);
        return view('Admin.profile.index',compact('user'));}

    }
    public function index2(){
        if(Auth::id()){
            $user=User::find(Auth::id());
            session()->put('first_name', Auth()->user()->first_name);
            session()->put('last_name', Auth()->user()->last_name);
            session()->put('image',Auth()->user()->image);
        return view('provider.profile.index',compact('user'));}

    }
    public function edit(Request $request)
    {

        $request-> validate ([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' =>  
            'regex:/^(079|078|077)\d{7}$/|max:10',
            'address' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['Address']=$request->address;

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images/customer/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/customer/'), $filename);
            $data['image'] = $filename;
        }
        else {
            unset($request->image);
        }
        $id = Auth::id();
        User::where(['id' => $id])->update($data);

        return redirect()->route('/')->with([
            'success' => 'updated successfully'
        ]);

    }
}
