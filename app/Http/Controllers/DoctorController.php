<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Doctor;
use App\Models\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        if($request->hasFile('photo')){

            $path = $request->file('photo')->store('user-photos');
            
        }

        $user = Doctor::create([
            'profession_id'=> $request->input('profession_id'),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'about' => $request->about,
            'photo' => $path,
            'role' => 'doctor'

        ]);
        
        return redirect()->route('team');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('clinica.show-doctor')->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {

        $professions = Profession::all();
        return view('admin.edit-doctor', ['doctor'=>$doctor, 'professions' => $professions ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, Doctor $doctor)
    {
        if($request->hasFile('photo')) {

            if (isset($doctor->photo) ) {
                Storage::delete($doctor->photo);
            }

            $path = $request->file('photo')->store('user-photos');
            $doctor->photo = $path;
            
        }


        $doctor->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'profession_id' => $request->input('profession_id'),
            'about' => $request->about,
            'photo' => $path ?? $doctor->photo,

        ]);

        return redirect()->route('admin.view-doctors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        if (isset($doctor->photo) ) {
            Storage::delete($doctor->photo);
        }
        $doctor->appointments()->delete();
        $doctor->comments()->delete();
        $doctor->delete();
        return redirect()->route('admin.view-doctors');
    }
}
