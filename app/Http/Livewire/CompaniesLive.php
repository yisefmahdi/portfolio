<?php

namespace App\Http\Livewire;

use App\Models\Companie;
use Livewire\Component;
use Livewire\WithFileUploads;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;

class CompaniesLive extends Component
{
    use WithFileUploads;

    public $company_name, $company_logo, $stutas,
    $ch_update = false, $company_update, $company_logo_img;

    public function add_company() {
        $this->validate([
            'company_name' => 'required',
            'company_logo' => 'required',
            'stutas'       => 'required',
        ],
        [
            'required'  => 'يرجى ادخال البيانات ',
        ]);

        $path = $this->company_logo->getClientOriginalExtension();
        if ($path != "png" && $path != "jpg" && $path != "jpeg") {
            session()->flash('Add', ' يجب ان تكون صورة');
        } else {
            $company_logo = $this->company_logo->store('company_img', 'images_car');
            Companie::create([
                'companey' => $this->company_name,
                'logo'     => $company_logo,
                'stutas'   => $this->stutas,
            ]);
        }

        session()->flash('Add', 'تمت الاضافة');
        $this->company_name = '';
        $this->company_logo = '';
    }

    public function edit($company_id) {
        $this->ch_update        = true;
        $this->company_update   = Companie::findorfail($company_id);
        $this->company_name     = $this->company_update->companey;
        $this->company_logo_img = $this->company_update->logo;
        $this->stutas           = $this->company_update->stutas;
    }

    public function update_company() {

        $this->validate([
            'company_name' => 'required',
            'stutas'       => 'required',
        ],
        [
            'required'  => 'يرجى ادخال البيانات ',
        ]);

        if ($this->company_logo != null) {
            $company_logo = $this->company_logo->store('company_img', 'images_car');
            $this->validate([
                'company_logo' => 'required|mimes:png,jpg,pdf',
            ],
            [
                'required'  => 'يرجى ادخال البيانات ',
                'mimes'     => 'يجب ان تكون صورة',
            ]);
        } else {
            $company_logo = $this->company_logo_img;
        }

        $this->company_update->update([
            'companey' => $this->company_name,
            'logo'     => $company_logo,
            'stutas'   => $this->stutas,
        ]);
        $this->company_update->save();
        session()->flash('Add', 'تم التعديل ');

        $this->company_name = '';
        $this->company_logo = '';
        $this->stutas       = '';
        $this->ch_update    = false;
    }

    public function clouse_stutes() {
        $this->company_name        = '';
        $this->company_logo        = '';
        $this->stutas              = '';
        $this->ch_update           = false;
    }

    public function delete($stutes_id) {
        Companie::destroy($stutes_id);
        session()->flash('Add', 'تم الحذف');
    }
    public function render()
    {
        $companie = Companie::get();
        return view('livewire.companies-live', compact('companie'));
    }
}
