<?php

namespace App\Http\Livewire;

use App\Models\Advertisement;
use App\Models\Companie;
use App\Models\Fuel;
use App\Models\Image_car;
use App\Models\Module_Car;
use App\Models\Outer_Shape;
use App\Models\States;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
class SaleCarLive extends Component
{
    use WithFileUploads;
    public $company_module, $marca, $module, $year_made, $fuel, $motion_vector, $radio_sh,
    $engine_capacity, $km, $price, $states, $desc ;

    public $items = [['img' => 0]];
    public function mount() { }
    public function increment() { $this->items[] = ['img']; }
    public function create_adv() {

        $this->validate([
            'price' => 'required',
            'desc' => 'required|max:10000',
            'year_made' => 'required',
            'motion_vector' => 'required',
            'engine_capacity' => 'required',
            'km' => 'required',
        ],
        [
            'required' => 'يرجى ادخال البيانات',
            'max' => 'قلل المحتوى في الوصف',
        ]);
        $caradv = Advertisement::create([
            // 'module_cars_id'  => $this->module,
            'company_id'      => $this->marca,
            'category_id'     => $this->module,
            'price'           => $this->price,
            'desc'            => $this->desc,
            'year_made'       => $this->year_made,
            'motion_vector'   => $this->motion_vector,
            'engine_capacity' => $this->engine_capacity,
            'km'              => $this->km,
            'fuel_id'         => $this->fuel,
            'state_id'        => $this->states,
            'outer_shapes_id' => $this->radio_sh,
            'user_id'         => Auth()->user()->id,
        ]);

        foreach ($this->items as $index => $item) {
            $path = $this->items[$index]['img']->getClientOriginalExtension();
            if ($path != "png" && $path != "jpg" && $path != "jpeg") {
                session()->flash('Error', ' يجب ان تكون صورة');
            } else {
                $image_car = $this->items[$index]['img']->store('car_img', 'images_car');
                Image_car::create([
                    'image'            => $image_car,
                    'advertisement_id' => $caradv->id,
                ]);
            }

            session()->flash('Add', ' الاعلان قيد الفحص ');
            redirect()->route('index_view');
        }
    }

    public function company_module() {
        if ($this->marca != 0) {
            $this->company_module = Companie::find($this->marca)->category;
        }
    }

    public function render()
    {
        $outer_shapes = Outer_Shape::get();
        $fuels   = Fuel::get();
        $modules = Module_Car::get();
        $companies = Companie::Where('stutas', 0)->get();
        $state_s = States::get();
        return view('livewire.sale-car-live', compact('outer_shapes', 'fuels', 'modules', 'companies', 'state_s'));
    }
}
