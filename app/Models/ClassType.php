<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassType extends Model
{
    use HasFactory;

    public function cycle()
    {
        return $this->belongsTo(Cycle::class, 'cycle', 'cycle');
    }

    public function establishmentClasses()
    {
        return $this->hasMany(EstablishmentClass::class);
    }

    public function yearClasses()
    {
        return $this->hasManyThrough(YearClass::class, EstablishmentClass::class);
    }
}
