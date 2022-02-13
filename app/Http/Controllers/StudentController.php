<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Classroom;
use App\Models\Family;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
        $family = Family::findOrFail($request->family_id);
        $classroom = Classroom::with("establishmentYear")->findOrFail($request->classroom_id);

        // if (!$classroom->capacity > 0 || $classroom->year->is_locked) {
        //     throw new \Exception("La capacity de la classe doit etre superieur à 0 et l'année doit etre modifiable", 1);
        // }

        DB::transaction(function () use ($family, $classroom, $request) {
            $student = $family->students()->create($request->validated());
            $classroom->studentRegistrations()->create(array_merge(
                ["student_id" => $student->id],
                $request->safe()->only('ex_registration_establishment', 'ex_registration_classroom')
            ));
        });


        return back();
        // return redirect()->route('students.index');
    }

    /**
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view("students.show")
            ->with("student", $student);
    }

    /**
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view("students.edit")
            ->with("student", $student);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return redirect()->route("students.show", ["student" => $student->id]);
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
