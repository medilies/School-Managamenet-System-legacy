<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Requests\StoreClientRequest;
use App\Models\Classroom;
use App\Models\Family;

class FamilyController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("families.index")
            ->with("families", Family::where("id", ">", 0)->withCount(['students', "clients"])->with('clients')->get());
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

        $client_validated_data = $request->validated();

        $family = Family::create();
        $family->clients()->create($client_validated_data);

        return redirect()->route('families.show', ['family' => $family->id]);
    }

    /**
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function show(Family $family)
    {
        $clients = $family->clients;

        return view('families.show')
            ->with('family_id', $family->id)
            ->with('father', $clients->where('family_title', 'father')->first())
            ->with('mother', $clients->where('family_title', 'mother')->first())
            ->with('students', $family->students()->with(['studentRegistrations'])->get())
            ->with('active_classrooms', Classroom::nonarchivedActiveClassrooms());
    }
}
