<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Booking;
use App\Models\Review;
use RealRashid\SweetAlert\Facades\Alert;



class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $user = User::find($id);
            $bookings = Booking::where('user_id', $id)->get();
            $review = Review::where('user_id', $id)->get();

            return view('frontend.profile.profile_combine', compact('user', 'bookings', 'review'));
        } else {
            // Handle the case when the user is not authenticated/logged in
            // For example, redirect them to the login page or show an error message.
            return redirect()->route('home')->with('error', 'Please log in to view your profile.');
        }
    }
    

    public function edit(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => ['nullable', 'numeric', 'regex:/^(079|078|077)\d{7}$/', 'digits_between:7,10'],
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['Address'] = $request->address;

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images/customer/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/customer/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($request->image);
        }
        $id = Auth::id();
        User::where(['id' => $id])->update($data);
        $user = User::find(Auth::id());
        $bookings = Booking::where('user_id', $id)->get();

        // $book=Booking::where(['id' => $id])->update($data);
        // return Redirect::route('frontend.profile.profile')
        Alert::success('Success', 'profile-updated!');

        return back()->with(compact('user', 'bookings'));
    }



    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        return Redirect::route('profile.edit');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    
}
