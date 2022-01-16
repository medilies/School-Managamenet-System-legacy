<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentalLink extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*
    |-------------------------------------
    | Relationships
    |-------------------------------------
    */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
