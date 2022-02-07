<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\ClassType;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Grabs a year's (example sabah-2022) classrooms and bulk update their capacity
 */
class ClassroomsCapacityController extends Controller
{
    /**
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function edit(Year $year)
    {
        return view('classrooms_capacity.edit')
            ->with('classrooms', $year->classrooms()->with("classType")->get())
            ->with('year', $year);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Validation will need a lot of elaboration

        $class_types = ClassType::all();

        $first_classroom_id = $request->first_classroom_id;

        DB::transaction(function () use ($first_classroom_id, $class_types, $request) {

            for ($i = $first_classroom_id; $i < $first_classroom_id + $class_types->count(); $i++) {
                $classroom_id = $i;
                $capacity = $request[$i];

                if (!is_numeric($capacity)) {
                    throw new \Exception("$capacity is not an integer!");
                    // generate validation msg
                }

                Classroom::where('id', $classroom_id)
                    ->update(['capacity' => $capacity]);
            }
        });

        return back();
    }
}
