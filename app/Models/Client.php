<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function parentalLinks()
    {
        return $this->hasMany(ParentalLink::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'parental_links')
            ->withPivot(['rel'])
            ->withTimestamps();
    }
}
