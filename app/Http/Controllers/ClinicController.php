<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use App\Models\Clinic;
use App\Models\Working_hours;
use App\Models\Clinic_Service;
use App\Models\Clinic_vet;
use App\Models\Category;
use App\Models\Booking;
use App\Models\Schedule;
use App\Models\Review;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request; 
use App\Http\Requests\StoreClinicRequest;
use App\Http\Requests\UpdateClinicRequest;
use Illuminate\Support\Facades\Session;





class ClinicController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        if (Auth::id()) {
            $role = Auth()->user()->role;
            if ($role == 'admin') {
                $clinic = Clinic::all();
                return view('Admin.clinics.index')->with('clinic', $clinic);
            } elseif ($role == 'provider') {
                $id = Auth::user()->id;
                $user = User::find($id);
                $clinicuser = $user->clinic_id;
                $clinic = Clinic::where('id', $clinicuser)->get();
                return view('provider.clinic.index')->with('clinic', $clinic);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.clinics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClinicRequest $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'name' => ['required', 'max:50'],
            'description' => ['required', 'max:1000'],
            'about' => ['required', 'max:1000'],
            'location' => ['required', 'max:1000'],
            'location_map' => ['required', 'max:1000'],
        ]);
 
        $clinic = new Clinic();
        $imagePath = $this->uploadImage($request, 'image', 'uploads');
        $clinic->image =  $imagePath;
        $clinic->name = $request->name;
        $clinic->description = htmlspecialchars($request->description);
        $clinic->location = htmlspecialchars($request->location);
        $clinic->location_map = htmlspecialchars($request->location_map);
        $clinic->about = htmlspecialchars($request->about);
        $clinic->save();

        Session::flash('success', 'Clinic created successfully!');

        return redirect('clinic');
    }

 

    public function show(Request $request)
    {
        $category = Category::all();
        $query = $request->input('query');
        $criteria = $request->input('criteria');
        $all_clinics = Clinic::query();
    
        // Apply search filters if present
        if ($query && $criteria) {
            if ($criteria === 'name') {
                $all_clinics->where('name', 'like', '%' . $query . '%');
            } elseif ($criteria === 'location') {
                $all_clinics->where('location', 'like', '%' . $query . '%');
            }
        }
        // Paginate the results, showing 10 clinics per page
        $all_clinics = $all_clinics->latest()->paginate(6);
    
        return view('frontend.clinics.clinics', compact('all_clinics', 'category'));
    }


    
    
   
    public function show1($id)
    {
        $all_clinics = Clinic::find($id);
    
        // Check if a user is authenticated
        $user = Auth::check() ? User::find(Auth::user()->id) : null;
    
        $bookedTimeSlots = Booking::all()->groupBy('date');
    
        // Get the currently selected date (or a default date if none is selected)
        $selectedDate = request()->input('selected_date', now()->toDateString());
    
        $work_hour = Working_hours::where('clinic_id', $id)->get();
        $clinic_service = Clinic_Service::where('clinic_id', $id)->get();
        $clinic_vet = Clinic_vet::where('clinic_id', $id)->get();
        $schedule = Schedule::where('clinic_id', $id)->get();
        $review = Review::where('clinic_id', $id)->get();

    
        return view('frontend.clinics.single_clinic', compact('all_clinics', 'work_hour', 'clinic_service', 'clinic_vet', 'schedule', 'user', 'bookedTimeSlots', 'selectedDate' , 'review'));
    }


    public function edit($id)
    {
        $clinic = Clinic::find($id);
    
        if (!$clinic) {
            return view('errors.404');
        }

        if (Auth::check()) { // Use Auth::check() to check if a user is authenticated
            $role = Auth()->user()->role;
            if ($role == 'admin') {
                return view('Admin.clinics.edit')->with('clinic', $clinic);
            } elseif ($role == 'provider') {
                return view('provider.clinic.edit')->with('clinic', $clinic);

            }
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinicRequest $request,  $id)
    {

        $request->validate([
            'image' => [ 'image', 'max:4192'],
            'name' => ['required', 'max:50'],
            'description' => ['required', 'max:1000'],
            'about' => ['required', 'max:1000'],
            'location' => ['required', 'max:1000'],
            'location_map' => ['required', 'max:1000'],
        ]);
        
             $clinic['name'] = $request->name;
             $clinic['description'] = $request->description;
             $clinic['about'] = $request->about;
             $clinic['location'] = $request->location;
             $clinic['location_map'] = $request->location_map;
            $filename = '';
    
            if ($request->hasFile('image')) {
                $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
                $request->image->move(public_path('/assets/img/'), $filename);
                 $clinic['image'] = $filename;
            } else {
                unset( $clinic['image']);
            }
             Clinic::where(['id' => $id])->update( $clinic);
             Session::flash('success', 'Clinic Updated successfully!');

            return redirect('clinic');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clinic::destroy($id);
        Session::flash('success', 'Clinic deleted successfully!');

        return redirect('clinic'); 
    }
}