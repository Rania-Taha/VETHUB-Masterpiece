<?php

namespace App\Http\Controllers;

use App\Models\Clinic_vet;
use App\Models\User;
use App\Models\Clinic;
use App\Traits\ImageUploadTrait;
use App\Http\Requests\StoreClinic_vetRequest;
use App\Http\Requests\UpdateClinic_vetRequest;
use Auth;
use Illuminate\Support\Facades\Session;



class ClinicVetController extends Controller
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
                $clinic_vet = Clinic_vet::with('clinic')->get();
                $clinics = Clinic :: all();
                return view('Admin.clinic_vet.index', compact('clinic_vet', 'clinics'));

            } elseif ($role == 'provider') {
                $id = Auth::user()->id;
                $user = User::find($id);
                $clinicuser = $user->clinic_id;
                $clinic_vet = Clinic_vet::where('clinic_id', $clinicuser)->get();
                $clinics = Clinic :: all();
                return view('provider.provider_clinic_vet.index', compact('clinic_vet', 'clinics'));

            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clinics = Clinic :: all();

        return view('Admin.clinic_vet.create', compact( 'clinics'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClinic_vetRequest $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'name' => ['required', 'max:100'],
            'position' => ['required', 'max:500'],
            'clinic_id'=> ['required'],
        ]);

       
        $clinic_vet = new Clinic_vet();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $clinic_vet->image =  $imagePath;
        $clinic_vet->name = $request->name;
        $clinic_vet->position = htmlspecialchars($request->position);
        $clinic_vet->clinic_id = $request->clinic_id;

        $clinic_vet->save();
        
       
        Session::flash('success', 'Vet created successfully!');

        return redirect('clinicVet');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinic_vet $clinic_vet)
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
            if ($role == 'admin') {
                $clinic_vet = Clinic_vet::find($id); 
                $clinics = Clinic :: all();

                return view('Admin.clinic_vet.edit', compact( 'clinics' , 'clinic_vet'));

            } elseif ($role == 'provider') {
                $id = Auth::user()->id;
                $user = User::find($id);
                $clinicuser = $user->clinic_id;
                $clinic_vet = Clinic_vet::where('clinic_id', $clinicuser)->first();
                $clinics = Clinic :: all();

                return view('provider.provider_clinic_vet.edit', compact( 'clinics' , 'clinic_vet'));

            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinic_vetRequest $request, $id)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'name' => ['required', 'max:100'],
            'position' => ['required', 'max:500'],
            'clinic_id'=> ['required'],
        ]);

        $clinic_vet['name'] = $request->name;
        $clinic_vet['position'] = $request->position;
        $clinic_vet['clinic_id'] = $request->clinic_id;
        $clinic_vet['image'] = $request->image;



        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $clinic_vet['image'] = $filename;
        } else {
            unset($clinic_vet['image']);
        }
       
        Clinic_vet::where(['id' => $id])->update($clinic_vet);
        Session::flash('success', 'Vet Updated successfully!');

        return redirect('clinicVet'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clinic_vet::destroy($id);
        Session::flash('success', 'Vet deleted successfully!');

        return redirect ('clinicVet');
    }
}
