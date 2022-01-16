<?php

namespace App\View\Components\Cards;

use Illuminate\View\Component;

class Student1 extends Component
{
    public $student_data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($studentData)
    {
        $this->student_data = $studentData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.student1');
    }
}
