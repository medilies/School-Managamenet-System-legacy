<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
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

    /*
    |-------------------------------------
    | Mutators
    |-------------------------------------
    */
    public function setFnameAttribute($value)
    {
        $this->attributes['fname'] = ucwords(strtolower($value));
    }

    public function setLnameAttribute($value)
    {
        $this->attributes['lname'] = strtoupper($value);
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    /*
    |-------------------------------------
    | Accessors
    |-------------------------------------
    */
    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }

    public function getArabicFullNameAttribute()
    {
        return "{$this->ar_fname} {$this->ar_lname}";
    }
}
