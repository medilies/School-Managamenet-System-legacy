<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Models\EstablishmentYear;
use Illuminate\Http\Request;

class YearController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param  \App\Models\EstablishmentYear  $establishmentYear
     * @return \Illuminate\Http\Response
     */
    public function show(EstablishmentYear $establishmentYear)
    {
        //
    }

    /**
     * @param  \App\Models\EstablishmentYear  $establishmentYear
     * @return \Illuminate\Http\Response
     */
    public function edit(EstablishmentYear $establishmentYear)
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstablishmentYear  $establishmentYear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstablishmentYear $establishmentYear)
    {
        //
    }
}
