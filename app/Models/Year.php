<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $primaryKey = 'year';
    public $incrementing = false;
    protected $keyType = 'string';

    public function yearClasses()
    {
        return $this->hasMany(YearClass::class, 'year', 'year');
    }
}
