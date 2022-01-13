<?php

namespace App\View\Components\Cards;

use Illuminate\View\Component;
use App\Models\Client;

class Client1 extends Component
{

    public $client_data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($client_data)
    {
        $this->client_data = $client_data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.client1');
    }
}
