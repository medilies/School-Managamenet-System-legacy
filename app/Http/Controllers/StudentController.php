<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Classroom;
use App\Models\Family;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('students.index')
            ->with('students', Student::orderBy('id', 'desc')->paginate(10));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {

        if (!isset($request->family_id)) {
            return response("L'étudiant doit appartenir à une famille.", 401);
        };

        $family = Family::findOrFail($request->family_id);
        $student = $family->students()->create($request->validated());

        if (isset($request->classroom)) {
            $classroom = Classroom::with("year")->findOrFail($request->classroom);

            if (!$classroom->capacity > 0 || $classroom->year->is_locked) {
                throw new \Exception("La capacity de la classe doit etre superieur à 0 et l'année doit etre modifiable", 1);
            }

            $classroom->studentRegistrations()->create(["student_id" => $student->id]);
        }

        return back();
        // return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return $student;
    }

    /**
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
