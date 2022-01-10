<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('families.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $step1_data = session('family-create-step1');
        $step2_data = session('family-create-step2');

        if (
            empty($step1_data) &&
            empty($step2_data)
        ) {

            session(
                [
                    'family-create-step1' =>
                    $request->validate(
                        [
                            'fname' => ['required',],
                            'lname' => ['required',],
                            'profession' => ['required',],
                            'phone' => ['required'],
                            'email' => ['email',],
                            'address' => ['',],
                        ]
                    )
                ]
            );

            return redirect()->route('families.create');
            //
        } else if (
            !empty($step1_data) &&
            empty($step2_data)
        ) {
            //
            session(
                [
                    'family-create-step2' =>
                    $request->validate(
                        [
                            'fname' => ['required',],
                            'lname' => ['required',],
                            'profession' => ['required',],
                            'phone' => ['required'],
                            'email' => ['email',],
                            'address' => ['',],
                        ]
                    )
                ]
            );
            //
        } else if (
            empty($step1_data) &&
            !empty($step2_data)
        ) {
            session()->forget(['family-create-step1', 'family-create-step2']);
            echo '<br>' .  "SYSTEM ERROR => step 2 filled while step 1 is empty";
        }
        //
        else {
            echo '<br>' .  "All good";
        }

        echo '<br>' .  "WHAT WHAAAAT";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function show(Family $family)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function edit(Family $family)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Family $family)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(Family $family)
    {
        //
    }
}
