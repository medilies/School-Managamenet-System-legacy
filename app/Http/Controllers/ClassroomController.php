<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Models\Classroom;
use App\Http\Requests\UpdateClassroomRequest;
use App\Models\EstablishmentYear;
use App\Models\Year;

class ClassroomController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $establishment_classes = Classroom::with('classType', 'year')
        //     ->orderBy('year_id', 'desc')
        //     ->orderBy('class_type_id')
        //     ->get()
        //     ->groupBy(['year.year', 'year.establishment_id']);

        // // not done
        // return view('classrooms.index')
        //     ->with('establishment_classes', $establishment_classes);
    }

    /**
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        return view("classrooms.show")
            ->with('classroom', $classroom)
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
