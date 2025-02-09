<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Doctor;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function admin(){
        $doctor = Doctor::count();
        $user = User::count();
        $appointment = Appointments::count();
        $profession = Profession::count();
        return view('admin.admin-home', ['doctorCount'=>$doctor, 'userCount'=>$user, 'appointment'=>$appointment, 'profession' => $profession]);
    }

    public function viewDoctors(){

        $doctors = Doctor::all();
        return view('admin.admin-view-doctors')->with('doctors', $doctors);
    }

    public function createDoctor(){

        $professions = Profession::all();
        return view('admin.create-doctor')->with('professions', $professions);
    }

    public function one_view_doctor(Doctor $doctor){
        return view('admin.one-view-doctor')->with('doctor', $doctor);
    }

    public function one_view_profession(Profession $profession){
        return view('admin.one-view-profession')->with('profession', $profession);
    }


}
