<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Requests\StoreEstablishmentYearRequest;
use App\Models\ClassType;
use App\Models\Establishment;
use App\Models\EstablishmentYear;
use App\Models\Year;

class EstablishmentYearController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('establishment-years.index')
            ->with('yearsByyear', EstablishmentYear::where('id', '>', 0)->with('year')->get()->groupBy("year_id"));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establishment-years.create')
            ->with('establishments', Establishment::all())
            ->with('years', Year::whereIn('state', ['current', 'upcoming'])->get());
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstablishmentYearRequest $request)
    {

        extract($request->safe()->only(['year_id', 'establishment_id']));

        $establishment = Establishment::findOrFail($establishment_id);
        $year = Year::findOrFail($year_id);

        // NEED MORE WORK
        // if ($year->establishmentYears()->where('state', "!=", "upcoming")->count())
        //     return "This establishment already has an unlocked year";

        $establishment_year = $year->establishmentYears()->create(['establishment_id' => $establishment_id]);

        $class_types = ClassType::all();

        foreach ($class_types as $class_type) {

            $establishment_year->classrooms()->create(
                [
                    'class_type_id' => $class_type->id,
                    'capacity' => 0,
                ]
            );
        }

        return redirect()->route('establishment-years.index');
    }

    /**
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function show(EstablishmentYear $establishment_year)
    {
        return view("establishment-years.show")
            ->with('establishment_year', $establishment_year)
            ->with('classrooms', $establishment_year->classrooms()->with(['establishmentYear', 'classType'])->withCount(["studentRegistrations"])->get());
    }
}
