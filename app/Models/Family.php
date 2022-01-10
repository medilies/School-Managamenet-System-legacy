<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
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
    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    // App\Models\Family::with(['clients', 'students'])->find(1)
    // App\Models\Family::where('id', '=', 1)->with(['clients', 'students'])->get()
    // App\Models\Family::where('id', '=', 1)->with(['clients', 'students'])->get()->all()[0]->clients
}
