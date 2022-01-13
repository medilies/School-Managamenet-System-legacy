<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function clients()
    {
        return $this->hasManyThrough(Client::class, Family::class, 'id', 'family_id', 'family_id', 'id');
    }
    // App\Models\Student::find(1)->clients()->get()
    // App\Models\Student::with(['clients', 'family'])->find(1)

    public function studentRegistrations()
    {
        return $this->hasMany(StudentRegistration::class);
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

    /*
    |-------------------------------------
    | Validation
    |-------------------------------------
    */
    public static function validate($request_reference_object)
    {
        return $request_reference_object->validate(
            [
                'fname' => ['required',],
                'ar_fname' => ['required',],
                'lname' => ['required',],
                'ar_lname' => ['required',],
                'bday' => ['required', 'date'],
                'bplace' => ['required',],
            ]
        );
    }
}
