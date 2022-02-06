<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class StudentForm extends Component
{
    public $active_classrooms;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($activeClassrooms)
    {
        $this->active_classrooms = $activeClassrooms;
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
