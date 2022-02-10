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
            ->join('establishment_years', "classrooms.establishment_year_id", "=", "establishment_years.id")
            ->join("class_types", "classrooms.class_type_id", "=", "class_types.id")
            ->join("years", "years.id", "=", "establishment_years.year_id")
            ->select([
                'establishment_years.year_id',
                'establishment_years.establishment_id',
                'class_types.cycle_id',
                'class_types.name',
                'classrooms.capacity',
                'classrooms.id as id'
            ])
            ->where("classrooms.capacity", ">", 0)
            ->where('years.state', "!=", "archived")
            ->get()
            ->groupBy(['year', 'establishment_id']);
    }

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function establishmentYear()
    {
        return $this->belongsTo(EstablishmentYear::class);
    }

    public function classType()
    {
        return $this->belongsTo(ClassType::class);
    }

    public function studentRegistrations()
    {
        return $this->hasMany(StudentRegistration::class);
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, StudentRegistration::class);
    }
}
