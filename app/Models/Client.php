<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'ar_fname',
        'lname',
        'ar_lname',
        'profession',
        'phone',
        'email',
        'address',
    ];

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
