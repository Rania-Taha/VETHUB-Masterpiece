<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Review;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Clinic;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $review = Review::all();
        $user = User::all();
        $clinics = Clinic::all();

        return view('Admin.reviews.index', compact('user', 'clinics', 'review'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $review = Review::all();
        $user = User::all();
        $clinics = Clinic::all();
        return view('Admin.reviews.create', compact('user', 'clinics', 'review'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        $request->validate([
            'rating' => ['required'],
            'comment' => ['required', 'max:505'],
        ]);

        $booking = Booking::where('id', $request->id)->with('schedule')->first();

        if (Auth::id()) {
            $idUser = Auth::user()->id;
            $review = new Review();
            $review->rating = $request->rating;
            $review->review_text = $request->comment;
            $review->user_id = $idUser;
            $review->clinic_id = $booking->schedule->clinic_id;
        }

        $review->save();
        Alert::success('Success', 'Review Created Successfully!');

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $review = Review::find($id);
        $user = User::all();
        $clinic = Clinic::all();

        return view('Admin.reviews.edit', compact('user', 'clinic', 'review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, $id)
    {
        $review['rating'] = $request->rating;
        $review['review_text'] = $request->review_text;
        $review['clinic_id'] = $request->clinic_id;
        $review['user_id'] = $request->user_id;

        Review::where(['id' => $id])->update($review);
        return redirect('review');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Review::destroy($id);
        Alert::success('Success', 'Review Deleted Successfully!');

        return redirect()->back();
    }
}
