<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
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
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'diagnosis' => 'required|string'
        ]);

        $doctor_id = session('doctor_id');
        $requestData = $request->all();
        $requestData['doctor_id'] = $doctor_id;  // doctor_id ni qo'shish

        Diagnosis::create($requestData);  // Yangi Diagnosis yaratish

        return redirect()->route('doctors.index')->with('success', 'Tashxis qo‘shildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosis $diagnosis)
    {
        // return view('diagnoses.show', compact('diagnosis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnosis $diagnosis)
    {
        // return view('diagnoses.edit', compact('diagnosis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diagnosis $diagnosis)
    {
        $request->validate([
            'diagnosis' => 'required|string'
        ]);

        $diagnosis->update($request->all());

        return redirect()->route('diagnoses.index')->with('success', 'Tashxis yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosis $diagnosis)
    {
        $diagnosis->delete();
        return redirect()->route('diagnoses.index')->with('success', 'Tashxis o‘chirildi!');
    }
    
}
