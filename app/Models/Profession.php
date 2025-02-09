<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    /** @use HasFactory<\Database\Factories\ProfessionFactory> */
    use HasFactory;
    protected $fillable = ['name'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class); // Bir profession uchun ko'plab doctorlar
    }
}
