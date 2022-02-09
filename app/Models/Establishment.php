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
    public function establishmentYears()
    {
        return $this->hasMany(EstablishmentYear::class);
    }

    public function classrooms()
    {
        return $this->hasManyThrough(Classroom::class, EstablishmentYear::class);
    }
}
