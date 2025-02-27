<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Appointments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::guard('web')->user();
        return view('user.user-profil')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function showAppointments()
    {
       
        $user = Auth::guard('web')->user();
        $appointments = Appointments::where('user_id', $user->id)->get();
        // dd($appointments);
        return view('user.user-appointment' )->with('appointments', $appointments);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => $request->password,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 'user'
        ]);

        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        return view('doctor.one-view-user')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.user-profile-update')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if ($request->hasFile('photo')) {


            if ($user->photo && Storage::exists('storage/' . $user->photo)) {
                Storage::delete('storage/' . $user->photo);
            }

            $path = $request->file('photo')->store('user-photos', 'public');
            $user->photo = $path;
        }



        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo' => $path ?? $user->photo,
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (isset($user->photo)) {
            Storage::delete($user->photo);
        }
        $user->delete();
        return redirect()->route('admin.view-doctors');
    }
}
