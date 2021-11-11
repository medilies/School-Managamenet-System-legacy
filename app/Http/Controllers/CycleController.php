<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cycle;

class CycleController extends Controller
{

    public function showAll()
    {
        dd(Cycle::all());
    }

    public function showAllClassTypes(Cycle $cycle)
    {
        dd($cycle->classTypes()->get());
    }

    public function showAllEstablishmentClasses(Cycle $cycle)
    {
        dd($cycle->establishmentClasses()->get());
    }
}
