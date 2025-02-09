<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class UserController extends Controller
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
        // dd($user);

        return view('clinica.show-doctor')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.edit-doctor')->with(['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, User $user)
    {

     

        // $user->update([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'password' => $request->password,
        //     'email' => $request->email,
        //     'profession' => $request->profession,
        //     'about' => $request->about,
        //     'photo' => $path ?? $user->photo,

        // ]);

        // return redirect()->route('admin.view-doctors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (isset($user->photo) ) {
            Storage::delete($user->photo);
        }
        $user->delete();
        return redirect()->route('admin.view-doctors');
    }
}
