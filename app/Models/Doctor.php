<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Doctor extends Authenticatable
{
    use HasFactory;
    protected $fillable = [ 'profession_id', 'first_name', 'last_name', 'password', 'email', 'profession', 'about', 'photo', 'role' ];

    public function comments() {
        return $this->hasMany(Comment::class);

    }
    public function appointments() {
        return $this->hasMany(Appointments::class);
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class); // 'profession_id' orqali bog'lanadi
    }

    public function diagnoses()
    {
        return $this->hasMany(Diagnosis::class, 'doctor_id');
    }
}
