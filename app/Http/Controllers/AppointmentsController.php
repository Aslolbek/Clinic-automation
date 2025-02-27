<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentsRequest;
use App\Models\Appointments;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('clinica.appointment', ['doctors' => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentsRequest $request)
    {

        $user = Auth::guard('web')->user();
        $appointment = Appointments::create([
            'doctor_id' => $request->input('doctor_id'),
            'user_id' => Auth::id(),
            'name' => $user->first_name,
            'phone' => $user->phone,
            'email' => $user->email,
            'appointment_times' => $request->first_data,
            'diagnos' => $request->diagnos,
        ]);
        return redirect()->route('appointments.index');
    }

    /**
     * Display the specified resource.
     * Userga uchrashuvlarni olib berish uchun ishlatiladi
     */
    public function show(appointments $appointments)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(appointments $appointments)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appointments $appointment)
    {
        $appointment->delete(); // Appointmentni o'chiramiz
        return redirect()->route('showAppointments')->with('success', 'Appointment muvaffaqiyatli o‘chirildi!');
    }
}
