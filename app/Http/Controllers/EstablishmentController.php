<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function showAll()
    {
        dd(Establishment::all());
    }

    public function showAllEstablishmentClasses(Establishment $establishment)
    {
        dd($establishment->establishmentClasses()->get());
    }

    public function showAllYearClasses(Establishment $establishment)
    {
        dd($establishment->yearClasses()->get());
    }
}
