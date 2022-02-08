<?php

namespace App\View\Components\Nav;

use App\Models\Year;
use Illuminate\View\Component;

class UnlockedYears extends Component
{
    public $unlocked_years;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->unlocked_years = Year::where("locked", false)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.unlocked-years');
    }
}
