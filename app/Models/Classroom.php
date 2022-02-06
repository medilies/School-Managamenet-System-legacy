<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $guarded = [];


    public static function activeClassrooms()
    {
        return self::getQuery()
            ->join('years', "classrooms.year_id", "=", "years.id")
            ->join("class_types", "classrooms.class_type_id", "=", "class_types.id")
            ->select('year', 'establishment_id', 'cycle_id', 'name',  'capacity', 'year_id', 'class_type_id', 'classrooms.id as id')
            ->where("capacity", ">", 0)
            ->get()
            ->groupBy(['year', 'establishment_id']);
    }

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function classType()
    {
        return $this->belongsTo(ClassType::class);
    }

    public function studentRegistrations()
    {
        return $this->hasMany(StudentRegistration::class);
    }
}
