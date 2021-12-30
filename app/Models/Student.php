<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'ar_fname',
        'lname',
        'ar_lname',
        'bday',
        'bplace',
    ];

    public function parentalLinks()
    {
        return $this->hasMany(ParentalLink::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'parental_links')
            // ->as('relationship')
            ->withPivot(['rel'])
            ->withTimestamps();
    }
}
