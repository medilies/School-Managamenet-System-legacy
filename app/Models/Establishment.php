<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    protected $primaryKey = 'establishment';
    public $incrementing = false;
    protected $keyType = 'string';

    public function establishmentClasses()
    {
        return $this->hasMany(EstablishmentClass::class, 'establishment');
    }

    public function yearClasses()
    {
        return $this->hasManyThrough(YearClass::class, EstablishmentClass::class, 'establishment');
    }
}
