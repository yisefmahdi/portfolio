<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Categorie;
use App\Models\Companie;
use App\Models\Module_Car;
use App\Models\Outer_Shape;
use App\Models\States;
use Livewire\Component;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class UpdateNewCarLive extends Component
{
    public $car,$company_module, $marca, $module, $motion_vector, $radio_sh,$th,$torque,$average,
    $engine_capacity, $price, $agent, $aggre, $number_seats, $acceleration, $horse_power, $origin;


    public function mount($key) {
        $this->car = $key;
        $model_id = Module_Car::findorfail($this->car->module_cars_id);
        $this->module          = $this->car->module_cars_id;
        $this->price           = $this->car->price;
        $this->engine_capacity = $this->car->engine_capacity;
        $this->th              = $this->car->generation;
        $this->motion_vector   = $this->car->motion_vector;
        $this->torque          = $this->car->torque;
        $this->average         = $this->car->average_consumption;
        $this->origin          = $this->car->origin;
        $this->horse_power     = $this->car->horse_power;
        $this->acceleration    = $this->car->acceleration;
        $this->number_seats    = $this->car->number_seats;
        $this->aggre           = $this->car->gather;
        $this->agent           = $this->car->agent;
        $this->marca           = $model_id->company_id;
        $this->radio_sh        = $this->car->outer_shapes_id;

        $this->company_module = Module_Car::get();
    }

    public function update() {
        $model_id = Module_Car::findorfail($this->car->module_cars_id);
        $this->car->update([
            'module_cars_id'     => $this->module,
            'categorie_id'       => $model_id->category_id,
            'price'              => $this->price,
            'engine_capacity'    => $this->engine_capacity,
            'generation'         => $this->th,
            'motion_vector'      => $this->motion_vector,
            'torque'             => $this->torque,
            'average_consumption'=> $this->average,
            'origin'             => $this->origin,
            'horse_power'        => $this->horse_power,
            'acceleration'       => $this->acceleration,
            'number_seats'       => $this->number_seats,
            'gather'             => $this->aggre,
            'agent'              => $this->agent,
            'company_id'         => $model_id->company_id,
            'outer_shapes_id'    => $this->radio_sh,
        ]);

        $this->module           = '';
        $this->price            = '';
        $this->engine_capacity  = '';
        $this->th               = '';
        $this->motion_vector    = '';
        $this->torque           = '';
        $this->average          = '';
        $this->origin           = '';
        $this->horse_power      = '';
        $this->acceleration     = '';
        $this->number_seats     = '';
        $this->aggre            = '';
        $this->agent            = '';
        $this->radio_sh         = '';
        session()->flash('Add', ' تم التعديل  ');
        redirect()->route('view.new.cars');
    }


    public function delete() {
        Car::destroy($this->car->id);
        session()->flash('Add', ' تم حذف السيارة  ');
        redirect()->route('view.new.cars');
    }

    public function company_module() {
        if ($this->marca != 0) {
            $this->company_module = Companie::find($this->marca)->model;
        }
    }
    public function render()
    {
        $outer_shapes = Outer_Shape::get();
        $modules = Module_Car::get();
        $companies = Companie::Where('stutas', 0)->get();
        $state_s = States::get();
        return view('livewire.update-new-car-live', compact('outer_shapes', 'modules', 'companies', 'state_s'));
    }
}
