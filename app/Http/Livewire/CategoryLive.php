<?php

namespace App\Http\Livewire;
use App\Models\Categorie;
use App\Models\Companie;
use App\Models\Module_Car;
use Livewire\Component;

class CategoryLive extends Component
{
    public $category, $name_car, $marca, $company_modules,
    $ch_update = false, $category_update;

    public function company_module() {
        if ($this->marca != 0) {
            $this->company_modules = Companie::find($this->marca)->category_model;
        }
    }

    public function add() {
        $this->validate([
            'category' => 'required',
            'name_car' => 'required',
            'marca'     => 'required',
        ],
        [
            'required'  => 'يرجى ادخال البيانات ',
        ]);

        Module_Car::create([
            'name_car'      => $this->name_car,
            'category_id'   => $this->category,
            'company_id'    => $this->marca,
        ]);

        $this->name_car = '';
        $this->category = '';
        $this->marca    = '';
        session()->flash('Add', 'تم اضافة الفئه');
    }

    public function edit($module_Car) {
        $this->ch_update = true;
        $this->category_update = Module_Car::findorfail($module_Car);
        $this->name_car        = $this->category_update->name_car;
        $this->marca           = $this->category_update->company_id;
        $this->company_modules = Categorie::get();
        $this->category        = Categorie::where('id', $this->category_update->category_id)->first()->id;
    }

    public function update_model() {
        $this->validate([
            'category'  => 'required',
            'name_car'  => 'required',
            'marca'     => 'required',
        ],
        [
            'required'  => 'يرجى ادخال البيانات ',
        ]);

        $this->category_update->update([
            'name_car'      => $this->name_car,
            'category_id'   => $this->category,
            'company_id'    => $this->marca,
        ]);
        $this->category_update->save();

        $this->name_car     = '';
        $this->category     = '';
        $this->marca        = '';
        $this->ch_update    = false;
        session()->flash('Add', 'تم التعديل ');
    }

    public function clouse_category() {
        $this->name_car = '';
        $this->category = '';
        $this->marca    = '';
        $this->ch_update    = false;
    }

    public function delete($module_Car) {
    Module_Car::destroy($module_Car);
        session()->flash('Add', 'تم الحذف');
    }


    public function render()
    {
        $companies = Companie::Where('stutas', 0)->get();
        $categorie = Categorie::get();
        $model     = Module_Car::get();
        return view('livewire.category-live', compact('companies', 'categorie', 'model'));
    }
}
