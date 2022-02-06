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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create')
            ->with('active_classrooms', Classroom::activeClassrooms());
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $student = NULL;
        $student_validated_data = $request->validated();

        if (isset($request->family_id)) {

            $family = Family::find($request->family_id);
            $student = $family->students()->create($student_validated_data);
        } else {

            $student = Student::create($student_validated_data);
        }

        if (isset($request->classroom)) {
            $student->studentRegistrations()->create(["classroom_id" => $request->classroom]);
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
