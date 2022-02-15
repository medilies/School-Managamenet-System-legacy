<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    /**
     *
     * Just a query builder to join many tables:
     * - students
     * - students_registrations
     * - classrooms
     * - class_types
     * - establishment_classrooms
     *
     * And select specific columns (Mostly from students).
     *
     * @return Illuminate\Database\Query\Builder
     */
    public static function getStudentsWithLatestRegitration()
    {
        return DB::table('students')
            ->join('student_registrations', "student_registrations.student_id", "=", "students.id")
            ->join("classrooms", "classrooms.id", "=", "student_registrations.classroom_id")
            ->join("class_types", "class_types.id", "=", "classrooms.class_type_id")
            ->join("establishment_years", "establishment_years.id", "=", "classrooms.establishment_year_id")
            ->select([
                'students.id',
                'students.fname',
                'students.lname',
                DB::raw("CONCAT(students.fname, ' ', students.lname) AS full_name"),
                'students.ar_fname',
                'students.ar_lname',
                DB::raw("CONCAT(students.ar_fname, ' ', students.ar_lname) AS arabic_full_name"),
                'students.email',
                'students.bday',
                'students.bplace',
                'students.family_id',
                'student_registrations.status', //
                'student_registrations.ex_registration_establishment',
                'student_registrations.ex_registration_classroom',
                'class_types.name AS class_type',
                'establishment_years.year_id',
                'establishment_years.establishment_id',
            ]);
    }

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

    public function studentRegistrations()
    {
        return $this->hasMany(StudentRegistration::class);
    }

    public function LatestRegistration()
    {
        return $this->hasOne(StudentRegistration::class)->latest();
    }

    public function LatestClassroom()
    {
        return $this->hasOneThrough(Classroom::class, StudentRegistration::class, 'student_id', 'id', 'id', 'classroom_id')->latest();
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
