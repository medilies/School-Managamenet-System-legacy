<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassType extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function studentRegistrations()
    {
        return $this->hasManyThrough(StudentRegistration::class, Classroom::class);
    }
}
