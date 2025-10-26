<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Companie;
use App\Models\Module_Car;
use Livewire\Component;

class HeaderLive extends Component
{
    public $nav_si = false, $ch_search = false, $text_search, $requslt_search, $modle_search;

    public function search_click() {
        $this->ch_search = true;
        if ($this->text_search != null) {
            $this->requslt_search = Companie::where('companey', 'like', $this->text_search.'%')->where('stutas', 0)->get();
        }
    }

    public function clouse () {
        $this->text_search ='';
        $this->ch_search = false;
    }

    public function nav() {
        $this->nav_si = true;
    }
    public function render()
    {
        $companies  = Companie::where('stutas', 0)->get();
        return view('livewire.header-live', compact('companies'));
    }
}
