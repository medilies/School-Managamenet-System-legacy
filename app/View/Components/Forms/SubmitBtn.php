<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class SubmitBtn extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.submit-btn');
    }
}
