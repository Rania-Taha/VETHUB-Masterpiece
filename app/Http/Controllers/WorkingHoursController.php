<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Working_hours;
use App\Models\Clinic;
use App\Http\Requests\StoreWorking_hoursRequest;
use App\Http\Requests\UpdateWorking_hoursRequest;
use Auth;
use Illuminate\Support\Facades\Session;


class WorkingHoursController extends Controller
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
                $working_hours = Working_hours::with('clinic')->get();
                $clinic=Clinic::all();
                return view('Admin.working_hours.index', compact('working_hours' , 'clinic', 'user'));
            } elseif ($role == 'provider') {
                $clinicuser = Auth::user()->clinic_id;
                $working_hours = Working_hours::where('clinic_id', $clinicuser)->get();
                return view('provider.working_hours.index', compact('working_hours'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clinic=Clinic::all();

        if (Auth::id()) {
            $role = Auth()->user()->role;
        if ($role == 'admin') {
                return view('Admin.working_hours.create', compact( 'clinic'));
            } elseif ($role == 'provider') {
                return view('provider.working_hours.create', compact( 'clinic'));
        
            }} }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorking_hoursRequest $request)
    {
        $request->validate([
            'start_at' => ['required', 'max:20'],
            'ends_at' => ['required', 'max:20'],
        ]);

       
        $working_hours = new Working_hours();

       
        $working_hours->day = $request->day;
        $working_hours->start_at = $request->start_at;
        $working_hours->ends_at = $request->ends_at;
        if (Auth::id()) {
            $role = Auth()->user()->role;
            if ($role == 'admin') {
                $working_hours->clinic_id = $request->clinic_id;
            } elseif ($role == 'provider') {
        $roleProvider = Auth()->user()->clinic_id;
        $working_hours->clinic_id = $roleProvider;

    }}
        $working_hours->save();
        
        Session::flash('success', 'Created successfully!');
        return redirect('workHours');
    }

    /**
     * Display the specified resource.
     */
    public function show(Working_hours $working_hours)
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
            $working_hours =  Working_hours::find($id);
            $clinic = Clinic::all();
            $user= User::find($user_id);
            if ($role == 'admin') {
                return view('Admin.working_hours.edit', compact('working_hours','user', 'clinic'));
            } elseif ($role == 'provider') {
                return view('provider.working_hours.edit', compact('working_hours','user', 'clinic'));
            }
        }

    }

    public function update(UpdateWorking_hoursRequest $request, $id)
    {
        $request->validate([
            'start_at' => ['required', 'max:20'],
            'ends_at' => ['required', 'max:20'],
        ]);
        // Find the specific working_hours record by its ID
        $working_hours = Working_hours::find($id);
    
        // Check if the record was found
        if (!$working_hours) {
            return redirect()->back()->with('error_message', 'Working hours not found');
        }
    
        // Update the record with the new data
        $working_hours->day = $request->day;
        $working_hours->start_at = $request->start_at;
        $working_hours->ends_at = $request->ends_at;
        if (Auth::id()) {
            $role = Auth()->user()->role;
            if ($role == 'admin') {
                $working_hours->clinic_id = $request->clinic_id;
            } elseif ($role == 'provider') {
        $roleProvider = Auth()->user()->clinic_id;
        $working_hours->clinic_id = $roleProvider;

    }}    
        // Save the updated record
        $working_hours->save();
    
        // Flash a success message and redirect
        Session::flash('success', 'Working hours Updated!');
        return redirect('workHours');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Working_hours::destroy($id);
        Session::flash('success', 'Working Hours deleted!!');

        return redirect ('workHours'); 
    }
}
