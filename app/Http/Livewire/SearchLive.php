<?php

namespace App\Http\Livewire;

use App\Models\Companie;
use Livewire\Component;

class SearchLive extends Component
{
    public  $ch_search = false, $text_search, $requslt_search, $modle_search;
    public function search_click() {
        $this->ch_search = true;
        $this->requslt_search = Companie::where('companey', 'like', $this->text_search.'%')->get();
        // $this->modle_search   = Module_Car::where('name_car', 'like', $this->text_search.'%')->get();
    }
    public function render()
    {
        return view('livewire.search-live');
    }
}
