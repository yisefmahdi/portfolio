<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Companie;
use App\Models\Fuel;
use App\Models\Image;
use App\Models\Module_Car;
use App\Models\Outer_Shape;
use App\Models\States;
use Livewire\Component;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use Livewire\WithFileUploads;
class NewCarLive extends Component
{

    use WithFileUploads;
    public $company_module, $marca, $module, $motion_vector, $radio_sh,$th,$torque,$average,
    $engine_capacity, $price, $agent, $aggre, $number_seats, $acceleration, $horse_power, $origin;
    public $items = [['img' => 0]];
    public function mount() { }
    public function increment() { $this->items[] = ['img']; }
    public function company_module() {
        if ($this->marca != 0) {
            $this->company_module = Companie::find($this->marca)->model;
        }
    }

    public function add() {
        $this->validate([
            'module'            => 'required',
            'motion_vector'     => 'required',
            'radio_sh'          => 'required',
            'engine_capacity'   => 'required',
            'price'             => 'required',
            'agent'             => 'required',
            'aggre'             => 'required',
            'number_seats'      => 'required',
            'acceleration'      => 'required',
            'horse_power'       => 'required',
            'origin'            => 'required',
            'torque'            => 'required',
            'average'           => 'required',
            'th'                => 'required',
        ],
        [
            'required' => 'يجب ادخال البيانات'
        ]);

        $model_id = Module_Car::findorfail($this->module);
        $car = Car::create([
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

        foreach ($this->items as $index => $item) {
            $path = $this->items[$index]['img']->getClientOriginalExtension();
            if ($path != "png" && $path != "jpg" && $path != "jpeg") {
                session()->flash('Error', ' يجب ان تكون صورة');
            } else {
                $image_car = $this->items[$index]['img']->store('car_img', 'images_car');
                Image::create([
                    'image'            => $image_car,
                    'car_id' => $car->id,
                ]);
            }
        }
        $this->module           = '';
        $this->price            = '';
        $this->engine_capacity  = '';
        $this->th           = '';
        $this->motion_vector= '';
        $this->torque       = '';
        $this->average      = '';
        $this->origin       = '';
        $this->horse_power  = '';
        $this->acceleration = '';
        $this->number_seats = '';
        $this->aggre        = '';
        $this->agent        = '';
        $this->radio_sh     = '';
        session()->flash('Add', ' تم النشر  ');
    }
    public function render()
    {
        $outer_shapes = Outer_Shape::get();
        $fuels   = Fuel::get();
        $modules = Module_Car::get();
        $companies = Companie::Where('stutas', 0)->get();
        $state_s = States::get();
        return view('livewire.new-car-live', compact('outer_shapes', 'fuels', 'modules', 'companies', 'state_s'));
    }
}
