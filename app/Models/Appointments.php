<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentsFactory> */
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'user_id',
        'name',
        'phone',
        'email',
        'appointment_times',
        'diagnos'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
