<?php

namespace App\Http\Controllers;

use App\Models\EstablishmentClass;
use Illuminate\Http\Request;

class EstablishmentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EstablishmentClass::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstablishmentClass  $establishmentClass
     * @return \Illuminate\Http\Response
     */
    public function show(EstablishmentClass $establishmentClass)
    {
        return $establishmentClass;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstablishmentClass  $establishmentClass
     * @return \Illuminate\Http\Response
     */
    public function edit(EstablishmentClass $establishmentClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstablishmentClass  $establishmentClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstablishmentClass $establishmentClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstablishmentClass  $establishmentClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstablishmentClass $establishmentClass)
    {
        //
    }
}
