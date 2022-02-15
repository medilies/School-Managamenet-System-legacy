<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Requests\StoreClientRequest;
use App\Models\Family;
use App\Models\Student;

class FamilyController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("families.index")
            ->with("families", Family::orderBy('id', 'desc')->withCount(['students', "clients"])->with('clients')->paginate(10));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('families.create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $family = Family::create();
        $family->clients()->create($request->validated());

        return redirect()->route('families.show', ['family' => $family->id]);
    }

    /**
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function show(Family $family)
    {
        $clients = $family->clients;

        $students = Student::getStudentsWithLatestRegitration()
            ->whereIn('students.id', Student::where("family_id", $family->id)->pluck('id')->toArray())
            ->get();

        return view('families.show')
            ->with('family_id', $family->id)
            ->with('father', $clients->where('family_title', 'father')->first())
            ->with('mother', $clients->where('family_title', 'mother')->first())
            ->with('students', $students);
    }
}
