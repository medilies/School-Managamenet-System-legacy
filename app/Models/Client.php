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
    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, Family::class, 'id', 'family_id', 'family_id', 'id');
    }
    // App\Models\Client::find(1)->family->with(['students'])->get()

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
                'ar_fname' => ['',],
                'lname' => ['required',],
                'ar_lname' => ['',],
                'profession' => ['required',],
                'phone' => ['required'],
                'email' => ['email',],
                'address' => ['',],
                'family_title' => ['',],
            ]
        );
    }
}
