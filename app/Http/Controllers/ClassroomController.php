<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Models\Classroom;
use App\Http\Requests\UpdateClassroomRequest;
use App\Models\EstablishmentYear;

class ClassroomController
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
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        return view("classrooms.show")
            ->with('classroom', $classroom)
            ->with('class_type', $classroom->classType->name)
            ->with('registrations', $classroom->studentRegistrations()->with(["student"])->get())
            ->with('establishment_year', EstablishmentYear::findOrfail($classroom->establishment_year_id));
    }

    /**
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        //
    }

    /**
     * @param  \App\Http\Requests\UpdateClassroomRequest  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassroomRequest $request, Classroom $classroom)
    {
        //
    }
}
