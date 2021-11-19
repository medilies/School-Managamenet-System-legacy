<?php

namespace App\Http\Controllers;

use App\Models\YearClass;
use Illuminate\Http\Request;

class YearClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return YearClass::all();
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
     * @param  \App\Models\YearClass  $yearClass
     * @return \Illuminate\Http\Response
     */
    public function show(YearClass $yearClass)
    {
        // return $yearClass;
        return $yearClass->with('establishmentClass')->find($yearClass->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\YearClass  $yearClass
     * @return \Illuminate\Http\Response
     */
    public function edit(YearClass $yearClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\YearClass  $yearClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YearClass $yearClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\YearClass  $yearClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(YearClass $yearClass)
    {
        //
    }
}
