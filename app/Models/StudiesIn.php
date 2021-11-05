<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Registrations || StudentRegistrations
class StudiesIn extends Model
{
    use HasFactory;

    protected $table = 'studies_in';
    const CREATED_AT = 'sub_at';
    const UPDATED_AT = 'sub_updated_at';

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function yearClass()
    {
        return $this->belongsTo(YearClass::class);
    }
}
