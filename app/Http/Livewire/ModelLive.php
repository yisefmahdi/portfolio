<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Companie;
use App\Models\States;
use Livewire\Component;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ModelLive extends Component
{
    public $model, $marca,
    $ch_update = false, $model_update;

    public function add_model() {
        $this->validate([
            'model' => 'required',
            'marca' => 'required',
        ],
        [
            'required'  => 'يرجى ادخال اسم الولاية',
        ]);

        Categorie::create([
            'categotie' => $this->model,
            'company_id' => $this->marca,
        ]);

        session()->flash('Add', 'تم اضافة الموديل');
        $this->model = '';
        $this->marca = '';
    }

    public function edit($model_id) {
        $this->ch_update = true;
        $this->model_update = Categorie::findorfail($model_id);
        $this->model   = $this->model_update->categotie;
        $this->marca   = $this->model_update->company_id;
    }

    public function update_model() {
        $this->validate([
            'model' => 'required',
            'marca' => 'required',
        ],
        [
            'required'  => 'يرجى ادخال اسم الولاية',
        ]);

        $this->model_update->update([
            'categotie' => $this->model,
            'company_id' => $this->marca,
        ]);

        $this->model_update->save();
        session()->flash('Add', 'تم التعديل ');
        $this->model  = '';
        $this->marca = '';
        $this->ch_update    = false;
    }

    public function clouse_model() {
        $this->model  = '';
        $this->marca = '';
        $this->ch_update    = false;
    }

    public function delete($stutes_id) {
    Categorie::destroy($stutes_id);
        session()->flash('Add', 'تم الحذف');
    }

    public function render()
    {
        $companies = Companie::Where('stutas', 0)->get();
        $categorie = Categorie::get();
        return view('livewire.model-live', compact('companies', 'categorie'));
    }
}
