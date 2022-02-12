<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class StudentForm extends Component
{
    public $active_classrooms;
    public $student_data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($activeClassrooms = NULL, $studentData = NULL)
    {
        $this->active_classrooms = $activeClassrooms;
        $this->student_data = $studentData;
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
