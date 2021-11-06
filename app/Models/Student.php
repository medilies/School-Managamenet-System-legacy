<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function studentRegistrations()
    {
        return $this->hasMany(StudentRegistration::class);
    }

    public function parentalLinks()
    {
        return $this->hasMany(ParentalLink::class);
    }
}
