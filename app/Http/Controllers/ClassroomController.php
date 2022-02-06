<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Http\Requests\UpdateClassroomRequest;

class ClassroomController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishment_classes = Classroom::with('classType', 'year')
            ->orderBy('year_id', 'desc')
            ->orderBy('class_type_id')
            ->get()
            ->groupBy(['year.year', 'year.establishment_id']);

        // not done
        return view('classrooms.index')
            ->with('establishment_classes', $establishment_classes);
    }

    /**
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
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
