<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Doctor;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){

        $doctors = Doctor::paginate(4);
        $doctorCount = Doctor::count();
        $userCount = User::count();
        $professions = Profession::all();
        $comments = Comment::all();


        return view('clinica.main', [ 'doctors'=>$doctors, 'doctorCount'=>$doctorCount, 'userCount' => $userCount, 'professions' => $professions, 'comments' => $comments ]);
    }
    public function about(){
        return view('clinica.about');
    }
    public function appointment(){
        
    }
    public function contact(){
        return view('clinica.contact');
    }
    public function service(){
        return view('clinica.service');
    }
    public function team(){
        
        $doctors = Doctor::paginate(4);
        return view('clinica.team')->with('doctors', $doctors);
    }
    public function testimonial(){
        return view('clinica.testimonial');
    }
}
