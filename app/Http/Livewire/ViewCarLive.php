<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewCarLive extends Component
{
    public $car; public function mount($key) { $this->car = $key; }


    public function render()
    {
        return view('livewire.view-car-live');
    }
}
