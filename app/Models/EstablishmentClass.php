<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstablishmentClass extends Model
{
    use HasFactory;

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function classType()
    {
        return $this->belongsTo(ClassType::class);
    }

    public function yearClasses()
    {
        return $this->hasMany(YearClass::class);
    }
}
