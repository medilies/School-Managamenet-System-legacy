<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public function showAll()
    {
        dd(Year::all());
    }

    public function showAllYearClasses(Year $year)
    {
        dd($year->yearClasses()->get());
    }
}
