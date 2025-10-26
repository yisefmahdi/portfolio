<?php

namespace App\Http\Livewire;

use App\Models\States;
use Livewire\Component;

class StatesLive extends Component
{
    public $stutes_name,
    $ch_update = false, $states_update;

    public function add_stutes() {
        $this->validate([
            'stutes_name' => 'required',
        ],
        [
            'required'  => 'يرجى ادخال اسم الولاية',
        ]);

        States::create([
            'states' => $this->stutes_name,
        ]);

        session()->flash('Add', 'تم اضافة الولاية');
        $this->stutes_name = '';
    }

    public function edit($states_id) {
        $this->ch_update = true;
        $this->states_update = States::findorfail($states_id);
        $this->stutes_name   = $this->states_update->states;
    }

    public function update_stutes() {
        $this->validate([
            'stutes_name' => 'required',
        ],
        [
            'required'  => 'يرجى ادخال اسم الولاية',
        ]);

        $this->states_update->update([
            'states' => $this->stutes_name,
        ]);

        $this->states_update->save();
        session()->flash('Add', 'تم التعديل ');
        $this->stutes_name  = '';
        $this->ch_update    = false;
    }

    public function clouse_stutes() {
        $this->stutes_name  = '';
        $this->ch_update    = false;
    }

    public function delete($stutes_id) {
        States::destroy($stutes_id);
        session()->flash('Add', 'تم الحذف');
    }

    public function render()
    {
        $states = States::get();
        return view('livewire.states-live', compact('states'));
    }
}
