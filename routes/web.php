<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', [ PageController::class, 'main'])->name('main');
Route::get('/about', [ PageController::class, 'about'])->name('about');


Route::get('/contact', [ PageController::class, 'contact'])->name('contact');

Route::get('/service', [ PageController::class, 'service'])->name('service');

Route::get('/team', [ PageController::class, 'team'])->name('team');

Route::get('/testimonial', [ PageController::class, 'testimonial'])->name('testimonial');


/* Admin boshqaruvi uchun*/
Route::get('/admin', [AdminPageController::class, 'admin'])->name('admin');
Route::get('/admin/view-doctors', [AdminPageController::class, 'viewDoctors'])->name('admin.view-doctors');

Route::get('/admin/create', [AdminPageController::class, 'createDoctor'])->name('admin.create');

Route::get('/admin/doctor-one/{doctor}', [AdminPageController::class, 'one_view_doctor'])->name('one-view-doctor');


Route::get('/admin/profession-one/{profession}', [AdminPageController::class, 'one_view_profession'])->name('one-view-profession');


// 
Route::get('/appointment', [ PageController::class, 'appointment']);

Route::resource('professions', ProfessionController::class);




// Login uchun 
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register_store', [AuthController::class, 'register_store'])->name('register_store');

Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');


Route::post('logout', [AuthController::class, 'logout'])->name('logout');



// User route
Route::get('user/showAppointments', [UserController::class, 'showAppointments'])->name('showAppointments');
Route::resource('users', UserController::class);


// Appintment route
Route::resource('appointments', AppointmentsController::class);

// Comment route
Route::resource('comments', CommentController::class);



// Doctor route
Route::resource('doctors', DoctorController::class);

//Profession route
Route::resource('professions', ProfessionController::class);

// Diagnsis rouet
Route::resource('diagnosis', DiagnosisController::class);


