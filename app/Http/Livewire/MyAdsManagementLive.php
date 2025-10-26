<?php

namespace App\Http\Livewire;

use App\Models\Advertisement;
use App\Models\Companie;
use App\Models\Fuel;
use App\Models\Module_Car;
use App\Models\Outer_Shape;
use App\Models\States;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class MyAdsManagementLive extends Component
{
    public $ch_update = false, $update_adv;
    public $company_module, $marca, $module, $year_made, $fuel, $motion_vector, $radio_sh,
    $engine_capacity, $km, $price, $states, $desc;

    public function edit($myadv) {
        $this->update_adv       = Advertisement::find($myadv);
        $this->ch_update        = true;
        // $this->module           = $this->update_adv->module_cars_id;
        $this->marca            = $this->update_adv->company_id;
        $this->price            = $this->update_adv->price;
        $this->desc             = $this->update_adv->desc;
        $this->year_made        = $this->update_adv->year_made;
        $this->motion_vector    = $this->update_adv->motion_vector;
        $this->engine_capacity  = $this->update_adv->engine_capacity;
        $this->km               = $this->update_adv->km;
        $this->fuel             = $this->update_adv->fuel_id;
        $this->states           = $this->update_adv->state_id;
        $this->radio_sh         = $this->update_adv->outer_shapes_id;
        $this->company_module   = Companie::find($this->update_adv->company_id)->category;
    }
    public function company_module() {
        if ($this->marca != 0) {
            $this->company_module = Companie::find($this->marca)->category;
        }
    }
    public function update_adv() {
        $this->validate([
            'price'             => 'required',
            'desc'              => 'required|max:10000',
            'year_made'         => 'required',
            'motion_vector'     => 'required',
            'engine_capacity'   => 'required',
            'km' => 'required',
        ],
        [
            'required'  => 'يرجى ادخال البيانات',
            'max'       => 'قلل المحتوى في الوصف',
        ]);
        $this->update_adv->update([
            // 'module_cars_id'    => $this->module,
            'company_id'        => $this->marca,
            'category_id'       => $this->module,
            'price'             => $this->price,
            'desc'              => $this->desc,
            'year_made'         => $this->year_made,
            'motion_vector'     => $this->motion_vector,
            'engine_capacity'   => $this->engine_capacity,
            'km'                => $this->km,
            'fuel_id'           => $this->fuel,
            'state_id'          => $this->states,
            'outer_shapes_id'   => $this->radio_sh,
        ]);
        $this->ch_update = false;
        session()->flash('Add', 'تم تعديل الاعلان');
    }

    public function clous_update() {
        $this->ch_update = false;
    }

    public function delete($myadv_id) {
        Advertisement::destroy($myadv_id);
    }

    public function render()
    {
        $myads = Advertisement::where('user_id', Auth()->user()->id)->get();
        $outer_shapes = Outer_Shape::get();
        $fuels   = Fuel::get();
        $modules = Module_Car::get();
        $companies = Companie::Where('stutas', 0)->get();
        $state_s = States::get();
        return view('livewire.my-ads-management-live', compact('myads','outer_shapes', 'fuels', 'modules', 'companies', 'state_s'));
    }
}
