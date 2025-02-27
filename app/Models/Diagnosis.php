<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    /** @use HasFactory<\Database\Factories\DiagnosisFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
        'diagnosis'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function doctors()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
