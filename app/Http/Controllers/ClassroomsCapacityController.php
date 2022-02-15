<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Models\Classroom;
use App\Models\EstablishmentYear;
use App\Http\Requests\UpdateClassroomCapacityRequest;

/**
 * Grabs a year's (example sabah-2022) classrooms and bulk update their capacity
 */
class ClassroomsCapacityController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function edit(EstablishmentYear $establishment_year)
    {
        return view('classrooms_capacity.edit')
            ->with('classroomsByCycle', $establishment_year->classrooms()->with("classType")->get()->groupBy(['classType.cycle_id']))
            ->with('establishment_year', $establishment_year);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassroomCapacityRequest $request)
    {
        foreach ($request->validated() as $id => $capacity) {

            Classroom::where('id', trim($id, 'k_'))
                ->update(['capacity' => $capacity]);
        }

        return back();
    }
}
