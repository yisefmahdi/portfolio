<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Companie;
use App\Models\Module_Car;
use Livewire\Component;

class BoxSearchSm extends Component
{
    public $company_module, $company, $model,
    $value_model, $value_Companie,
    $ch_search = true, $ch_search_sm = false, $if_ch = false;
    public function company_module() {

        if ($this->company != 0) {
            $this->company_module = Companie::find($this->company)->category;
        }
    }
    public function radio_tr() {
        $this->ch_search = true;
    }
    public function radio_fa() {
        $this->ch_search = false;
    }
    public function if_ca_true() {
        if ($this->if_ch == false) {
            $this->if_ch = true;
        } else {
            $this->if_ch = false;
        }
    }
    public function if_ca_false () { $this->if_ch = false; }
    public function if_m_true() {
        if ($this->ch_search_sm == false) {
            $this->ch_search_sm = true;
        } else {
            $this->ch_search_sm = false;
        }
    }
    public function if_m_false () { $this->ch_search_sm = false; }


    public function clickc () {
        $Companie = Companie::find($this->company);
        $this->value_Companie = $Companie->companey;
    }

    public function clickk () {
        $Categorie = Categorie::find($this->model);
        $this->value_model = $Categorie->categotie;
    }

    public function search () {
        $this->validate([
            'company' => 'required',
            'model' => 'required',
        ]);
        if ($this->ch_search == true) {
            return redirect()->route('view.search.md.true',$this->model);
        } else {
            return redirect()->route('view.search.md.false',$this->model);
        }
    }

    public function render()
    {
        $companies  = Companie::where('stutas', 0)->get();
        $models     = Module_Car::OrderBy('id', 'DESC')->get();
        return view('livewire.box-search-sm', compact('companies', 'models'));
    }
}
