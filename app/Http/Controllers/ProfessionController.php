<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Profession;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professions = Profession::all();
        return view('admin.profession-create')->with('professions', $professions);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($profession_id) {

        $profession = Profession::where('id', $profession_id)->first();
        $doctors = Doctor::where('profession_id', $profession_id)->paginate(8);

    return view('clinica.profession-doctor' )
    ->with('doctors', $doctors)
    ->with('profession', $profession);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profession $profession)
    {
        return view('admin.edit-profession', ['profession' => $profession]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profession $profession)
    {
        $profession->update([
            'name' => $request->profession,
        ]);

        return redirect()->route('professions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profession $profession)
    {
        // Ushbu professionga bog‘langan barcha doctorlarni o‘chiramiz
        $profession->doctors()->delete();
        // Keyin professionni o‘chiramiz
        $profession->delete();
        return redirect()->route('professions.index');
    }
}
