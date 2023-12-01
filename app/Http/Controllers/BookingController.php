<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Booking;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Clinic;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $role = Auth()->user()->role;
            $id = Auth()->user()->id;
            $user = User::find($id);
    
            if ($role == 'admin') {
                $book = Booking::all();
                $schedules = Schedule::all();
                return view('Admin.bookings.index', compact('user', 'schedules', 'book'));
            } elseif ($role == 'provider') {
                // Get the provider's clinic ID
                $clinicId = $user->clinic_id;
                
                // Get schedules for the provider's clinic
                $schedules = Schedule::where('clinic_id', $clinicId)->get();
                
                // Get bookings related to the provider's schedules
                $book = Booking::whereIn('schedule_id', $schedules->pluck('id'))->get();
            }
    
            return view('provider.provider_bookings.index', compact('user', 'schedules', 'book'));
        }
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = Booking::all();
        $schedule = Schedule::all();
        $user = User::all();
        return view('Admin.bookings.create', compact('schedule', 'user', 'book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get the selected date and time from the form
        $selectedDate = $request->input('date');
        $selectedValue = $request->input('time');
        list($scheduleId, $selectedTime) = explode('|', $selectedValue);
    
        // Check if the selected time slot is available
        $schedule = Schedule::find($scheduleId);
    
        if ($schedule) {
            // Check if the selected time slot is already booked for the selected date
            $isTimeSlotBooked = Booking::where('date', $selectedDate)
                ->where('time', $selectedTime)
                ->exists();
    
            if (!$isTimeSlotBooked) {
                // The time slot is available and not already booked for the selected date; proceed to book it
    
                // Create a new Booking record
                $booking = new Booking();
                $booking->date = $selectedDate;
                $booking->time = $selectedTime;
                $booking->user_id = auth()->id(); // Get the authenticated user's ID
                $booking->schedule_id = $scheduleId;
                $booking->save();
    
                // Provide feedback to the user about the successful booking
                Alert::success('success', 'Your appointment has been successfully booked. Thank you for choosing our services.');
                return back();
            } else {
                // The selected time slot is already booked for the selected date; provide feedback to the user
                Alert::error('Sorry', 'The selected time has already been booked. Please choose another available time.');
            }
        } else {
            // The selected time slot is not available; provide feedback to the user
            Alert::error('Error Title', 'Error Message');
        }
    
        return back();
    }


public function getAvailableTimes(Request $request)
{
    // $selectedDate = $request->input('date');
    
    // // Query your database to get the available times and whether each time is booked
    // $schedules = Schedule::where('date', $selectedDate)->where('status', 'active')->get();

    // $availableTimes = [];
    
    // foreach ($schedules as $schedule) {
    //     $isBooked = Booking::where('date', $selectedDate)->where('time', $schedule->time)->exists();
        
    //     $availableTimes[] = [
    //         'time' => $schedule->time,
    //         'booked' => $isBooked,
    //     ];
    // }

    // return response()->json($availableTimes);
}




    
    
    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Booking::find($id);
        $schedule = Schedule::all();
        $user = User::all();
        
        return view('Admin.bookings.edit', compact('user', 'schedule', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, $id)
    {
        $book['date'] = $request->date;
        $book['time'] = $request->time;
        $book['schedule_id'] = $request->schedule_id;
        $book['user_id'] = $request->user_id;

        Booking::where(['id' => $id])->update($book);
       return redirect('book')->with('flash_message', 'book Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        // return redirect ('book')->with('flash_message', 'Booking deleted!');
        return redirect()->back()->with('flash_message', 'Booking deleted!');

    }
}
