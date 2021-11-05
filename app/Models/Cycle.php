<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    use HasFactory;

    protected $primaryKey = 'cycle';
    public $incrementing = false;
    protected $keyType = 'string';

    public function classTypes()
    {
        return $this->hasMany(ClassType::class, 'cycle', 'cycle');
    }
}
