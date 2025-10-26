<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\Header_images;
use Livewire\Component;

class HeaderImageLive extends Component
{
    use WithFileUploads;
    public $ch_update = false, $update, $link, $img;

    public function edit($edit_id) {
        $this->ch_update        = true;
        $this->update   = Header_images::findorfail($edit_id);
    }

    public function update() {

        $this->validate([
            'link'  => 'required',
            'img'   => 'required',
        ],
        [
            'required' => 'يرجى ادخال البيانات ',
        ]);

        $path = $this->img->getClientOriginalExtension();
        if ($path != "png" && $path != "jpg" && $path != "jpeg") {
            session()->flash('Error', ' يجب ان تكون صورة');
        } else {
            $img_header = $this->img->store('header_images', 'images_car');
            $this->update->update([
                'link' => $this->link,
                'header_image'     => $img_header,
            ]);
        }


        $this->update->save();
        session()->flash('Add', 'تم التعديل ');

        $this->link = '';
        $this->img = '';
        $this->ch_update    = false;
    }

    public function clouse() {
        $this->link        = '';
        $this->img        = '';
        $this->ch_update           = false;
    }

    public function render()
    {
        $header_images = Header_images::get();
        return view('livewire.header-image-live', compact('header_images'));
    }
}
