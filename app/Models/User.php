<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends  Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['first_name', 'last_name', 'password', 'email', 'phone', 'role'];

    protected $hidden = ['password', 'remember_token'];

    public function comments() {
        return $this->hasMany(Comment::class);

    }
    public function appointments() {
        return $this->hasMany(Appointments::class);

    }

    public function diagnoses()
    {
        return $this->hasMany(Diagnosis::class, 'user_id');
    }
}
