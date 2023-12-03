<?php
namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Clinic_Service;
use App\Models\Clinic;
use App\Traits\ImageUploadTrait;
use App\Http\Requests\StoreClinic_ServiceRequest;
use App\Http\Requests\UpdateClinic_ServiceRequest;
use Illuminate\Support\Facades\Session;


class ClinicServiceController extends Controller
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
                $id = Auth::user()->id;
                $user = User::find($id);
                $clinic_service = Clinic_Service::with('clinic')->get();
                $clinics = Clinic :: all();

                return view('Admin.clinic_service.index', compact('clinic_service' , 'clinics'));
            } elseif ($role == 'provider') {
                $id = Auth::user()->id;
                $user = User::find($id);
                $clinicuser = $user->clinic_id;
                $clinic_service = Clinic_Service::where('clinic_id', $clinicuser)->get();
                $clinics = Clinic :: all();

                return view('provider.provider_clinic_service.index', compact( 'clinic_service' , 'clinics'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clinics=Clinic::all();

        if (Auth::id()) {
            $role = Auth()->user()->role;
        if ($role == 'admin') {
        return view('Admin.clinic_service.create', compact( 'clinics'));
    } elseif ($role == 'provider') {
        return view('provider.provider_clinic_service.create', compact( 'clinics'));

    }} }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClinic_ServiceRequest $request)
    {
      
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'service_name' => ['required', 'max:20'],
            'description' => ['required', 'max:500'],
        ]);

        $clinic_service = new Clinic_Service();
        $imagePath = $this->uploadImage($request, 'image', 'uploads');
        $clinic_service->image = $imagePath;
        $clinic_service->service_name = $request->service_name;
        $clinic_service->description = htmlspecialchars($request->description);
        if (Auth::id()) {
            $role = Auth()->user()->role;
            if ($role == 'admin') {
        $clinic_service->clinic_id = $request->clinic_id;
    } elseif ($role == 'provider') {
        $roleProvider = Auth()->user()->clinic_id;
        $clinic_service->clinic_id = $roleProvider;

    }}
        $clinic_service->save();
        Session::flash('success', 'Service created successfully!');
        return redirect('clinicService'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinic_Service $clinic_Service)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Find the specific clinic service based on the provided $id.
    $clinic_service = Clinic_Service::find($id);

    $clinics = Clinic :: all();

    // Check if the clinic service with the provided ID is not found.
    if (!$clinic_service) {
        // Handle the case where the clinic service with the provided ID is not found.
        // You can redirect to an error page or return an error message.
        // For example, you can return a 404 error view:
        return view('errors.404');
    }

    // Continue with your role-based logic to determine which view to return.
    if (Auth::check()) { // Use Auth::check() to check if a user is authenticated
        $role = Auth()->user()->role;
        if ($role == 'admin') {
            return view('Admin.clinic_service.edit', compact( 'clinics' , 'clinic_service'));

        } elseif ($role == 'provider') {
            // Your provider logic here.
            // You can return a different view for providers or handle their logic here.
            return view('provider.provider_clinic_service.edit', compact( 'clinics' , 'clinic_service'));


        }
    }
}


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinic_ServiceRequest $request, $id)
    {
        $request->validate([
            'image' => [ 'image', 'max:4192'],
            'service_name' => ['required', 'max:200'],
            'description' => ['required', 'max:500'],
        ]);

        $clinic_service['image'] = $request->image;
        $clinic_service['service_name'] = $request->service_name;
        $clinic_service['description'] = $request->description;
        if (Auth::id()) {
            $role = Auth()->user()->role;
            if ($role == 'admin') {
        $clinic_service['clinic_id'] = $request->clinic_id;
    } elseif ($role == 'provider') {
        $roleProvider = Auth()->user()->clinic_id;
        $clinic_service['clinic_id'] = $roleProvider;
    }}

        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $clinic_service['image'] = $filename;
        } else {
            unset($clinic_service['image']);
        }
        Clinic_Service::where(['id' => $id])->update($clinic_service);
        Session::flash('success', 'Service Updated successfully!');

        return redirect('clinicService');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clinic_Service::destroy($id);
        Session::flash('success', 'Service deleted successfully!');

        return redirect('clinicService');
    }
}