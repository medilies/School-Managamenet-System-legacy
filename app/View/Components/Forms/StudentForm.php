<?php

namespace App\View\Components\Forms;

use App\Models\Classroom;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class StudentForm extends Component
{
    public $active_classrooms = NULL;
    public $class_types_names = NULL;
    public $student_data;
    public $update_form = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($studentData = NULL, $updateForm = false)
    {
        if (!$updateForm) {
            $this->active_classrooms = Classroom::nonarchivedActiveClassrooms();
            $this->class_types_names = DB::table('class_types')->pluck('name')->toArray();
        }
        $this->student_data = $studentData;
        $this->update_form = $updateForm;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.student-form');
    }
}
