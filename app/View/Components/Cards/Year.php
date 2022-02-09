<?php

namespace App\View\Components\Cards;

use App\Models\Establishment;
use Illuminate\View\Component;

class Year extends Component
{

    public $establishment;
    public $year_id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($establishment, $yearId)
    {
        $this->establishment = $establishment;
        $this->year_id = $yearId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.year');
    }
}
