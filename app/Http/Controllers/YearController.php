<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreYearRequest;
use App\Models\Classroom;
use App\Models\ClassType;
use App\Models\Establishment;
use App\Models\Year;

class YearController extends Controller
{

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Classroom::with('year')
            ->groupBy('year_id')
            ->get(['year_id'])
            ->groupBy('year.year');

        return view('years.index')
            ->with('years', $years);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // get accessible and not filled with classrooms in this year establishments

        return view('years.create')
            ->with('establishments', Establishment::all());
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreYearRequest $request)
    {

        extract($request->safe()->only(['year', 'establishment_id']));

        $establishment = Establishment::find($establishment_id);

        if ($establishment->years()->where('locked', 0)->count())
            return "This establishment already has an unlocked year";

        $createdYear = $establishment->years()->create(['year' => $year, 'locked' => false]);

        $class_types = ClassType::all();

        foreach ($class_types as $class_type) {

            $createdYear->classrooms()->create(
                [
                    'class_type_id' => $class_type->id,
                    'capacity' => 0,
                ]
            );
        }

        return redirect()->route('classrooms.index');
    }

    // /**
    //  * @param  \App\Models\Year  $year
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Year $year)
    // {
    //     //
    // }

    /**
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function destroy(Year $year)
    {
        //
    }
}
