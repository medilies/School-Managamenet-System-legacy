<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
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
    public function classTypes()
    {
        return $this->hasMany(ClassType::class);
    }

    public function classrooms()
    {
        return $this->hasManyThrough(Classroom::class, ClassType::class);
    }
}
