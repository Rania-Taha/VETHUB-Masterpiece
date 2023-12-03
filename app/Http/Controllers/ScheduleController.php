<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Clinic;
use App\Models\User;
use Auth;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;




class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::id()) {
            $role = Auth()->user()->role;
            if ($role == 'admin') {
                $id = Auth::user()->id;
                $user = User::find($id);
                $schedule = Schedule::with('clinic')->get();
                // dd($schedule);
               $clinic=Clinic::all();
               return view('Admin.schedule.index', compact('schedule' , 'clinic'));

            } elseif ($role == 'provider') {
                $id = Auth::user()->id;
                $user = User::find($id);
                $clinicuser = $user->clinic_id;
                $schedule = Schedule::where('clinic_id', $clinicuser)->get();
                $clinic=Clinic::find($clinicuser);
                return view('provider.provider_schedule.index', compact('schedule' , 'clinic'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clinic = Clinic::all();
        $user= User::find(1);
        return view('Admin.schedule.create', compact('user', 'clinic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {
        
        $request->validate([
           
            'time' => ['required', 'max:20'],
            'status' => ['required'],
           
        ]);

       
        $schedule = new Schedule();

       
        $schedule->time = $request->time;
        $schedule->status = $request->status;
        $schedule->clinic_id = $request->clinic_id;
       

        $schedule->save();
        
        Session::flash('success', 'Schedule Created successfully!');

        return redirect('schedule');

    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
 
        if (Auth::id()) {
            $role = Auth()->user()->role;
            $user_id = Auth::user()->id;
            $schedule = Schedule::with('clinic')->find($id);
            $clinic = Clinic::all();
            $user= User::find($user_id);
            if ($role == 'admin') {
                return view('Admin.schedule.edit', compact('schedule','user','clinic'));

            } elseif ($role == 'provider') {
                return view('provider.provider_schedule.edit', compact('schedule','user', 'clinic'));
            }
        }
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, $id)
    {
        $schedule['time'] = $request->time;
        $schedule['status'] = $request->status;
        $schedule['clinic_id'] = $request->clinic_id;
        
    
        Schedule::where(['id' => $id])->update( $schedule);
       return redirect('schedule')->with('flash_message', 'Schedule Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Schedule::destroy($id);
            Session::flash('success', 'Schedule deleted!');
            return redirect('schedule');
        } catch (\Exception $e) {
            Log::error("Error deleting schedule: {$e->getMessage()}");

            Session::flash('warning', 'You must delete bookings first before proceeding.');

            return redirect('schedule');
        }
    }
}
