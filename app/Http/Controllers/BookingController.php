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
use Srmklive\PayPal\Services\PayPal as PayPalClient;
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
                ->where('time', $selectedValue)
                ->exists();
         if (!$isTimeSlotBooked) {
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();
            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('paypal_success'),
                    "cancel_url" => route('paypal_cancel')
                ],
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => 3
                        ]
                    ]
                ]
                        ]);

            if (isset($response['id']) && $response['id'] != null) {
                foreach ($response['links'] as $link) {
                    if ($link['rel'] === 'approve') {
                        // Store specific data from the request in the session
    
                        session([
                            'paymentDetail' => [
                                'date' => $request->input('date'),
                                'time' => $request->input('time'),
                                'user_id' => $request->input('user_id'),
                                'schedule_id' => $scheduleId,
                            ]
                        ]);
    
                        // dd(session('paymentDetail'));
                        return redirect()->away($link['href']);
                    }
                }
            } else {
                return redirect()->route('paypal_cancel');
            }
            }
            else {
                Alert::error('Sorry', 'The selected time has already been booked. Please choose another available time.');
                return redirect()->back();
              };
        } 


            // if (!$isTimeSlotBooked) {
                
            //     $booking = new Booking();
            //     $booking->date = $selectedDate;
            //     $booking->time = $selectedTime;
            //     $booking->user_id = auth()->id(); 
            //     $booking->schedule_id = $scheduleId;
            //     $booking->save();

            //     Alert::success('success', 'Your appointment has been successfully booked. Thank you for choosing our services.');
            //     return back();
            // } else {
            //     Alert::error('Sorry', 'The selected time has already been booked. Please choose another available time.');
            // }
        }
       
    



    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        // dd($response);


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $payment = session('paymentDetail');

            $user = Auth::user();
            // dd($payment);
            // Create a new reservation
            $booking = new Booking();
            $booking->user_id = $user->id;
            $booking->date = $payment['date'];
            $booking->time = $payment['time'];
            $booking->schedule_id = $payment ['schedule_id'];

            $booking->save();
            // Alert::success('Success', 'Your Reservation is confirmed!');

            // return redirect()->route('home');
            // return redirect()->back();
            return view('frontend.thank_you');


            // return redirect()->route('index');
        } else {
            return redirect()->route('paypal_cancel');
        }
    }


    public function cancel()
    {
        return redirect()->route('about')->with('error', 'Payment is cancelled!');
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
