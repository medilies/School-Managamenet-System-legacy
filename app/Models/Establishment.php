<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = [];

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function studentRegistrations()
    {
        return $this->hasManyThrough(StudentRegistration::class, Classroom::class);
    }
}
