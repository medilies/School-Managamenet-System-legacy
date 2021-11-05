<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearClass extends Model
{
    use HasFactory;

    public function year()
    {
        return $this->BelongsTo(Year::class, 'year', 'year');
    }

    public function studiesIn()
    {
        return $this->hasMany(studiesIn::class);
    }
}
