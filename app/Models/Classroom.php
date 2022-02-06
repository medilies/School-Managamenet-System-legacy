<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function classType()
    {
        return $this->belongsTo(ClassType::class);
    }

    public function studentRegistrations()
    {
        return $this->hasMany(StudentRegistration::class);
    }
}
