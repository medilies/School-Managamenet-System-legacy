<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Establishment;
use App\Models\Year;
use Illuminate\Http\Request;

class YearClassroomsController extends Controller
{

    /**
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function show(Year $year)
    {

        return $year->classrooms()->get();
    }

    /**
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function edit(Year $year)
    {

        $classrooms = $year->classrooms()->with("classType")->get();

        return view('year-classrooms.edit')
            ->with('classrooms', $classrooms)
            ->with('year', $year);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Year $year)
    {
        // Validation will need a lot of elaboration

        $classrooms = $request->all();

        foreach ($classrooms as $classroom_id => $capacity) {

            Classroom::where('id', $classroom_id)
                ->update(['capacity' => $capacity]);
        }

        return back();
    }
}
