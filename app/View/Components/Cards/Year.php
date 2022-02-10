<?php

namespace App\View\Components\Cards;

use App\Models\Establishment;
use Illuminate\View\Component;

class Year extends Component
{

    public $establishment;
    public $establishment_year_id;
    public $state;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($establishment, $establishmentYearId, $state)
    {
        $this->establishment = $establishment;
        $this->establishment_year_id = $establishmentYearId;
        $this->state = $state;
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
