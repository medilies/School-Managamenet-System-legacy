<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class ClientForm extends Component
{
    public $client_data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($clientData = NULL)
    {
        $this->client_data = $clientData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.client-form');
    }
}
