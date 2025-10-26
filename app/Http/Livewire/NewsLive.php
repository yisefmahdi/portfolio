<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;
class NewsLive extends Component
{
    public $title, $img , $text,
    $ch_update = false, $update, $img_update;
    use WithFileUploads;
    public function add () {
        $this->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => 'required',
        ],
        [
            'required' => 'يرجى ادخال البيانات'
        ]);

        $path = $this->img->getClientOriginalExtension();
        if ($path != "png" && $path != "jpg" && $path != "jpeg") {
            session()->flash('Add', ' يجب ان تكون صورة');
        } else {
            $image = $this->img->store('news', 'images_car');
            News::create([
                'title' => $this->title,
                'text'  => $this->text,
                'image' => $image,
            ]);
        }
        session()->flash('Add', 'تمت الاضافة');
        $this->title     = '';
        $this->text      = '';
        $this->img       = '';
    }

    public function edit($news_id) {
        $this->update = News::find($news_id);
        $this->title     = $this->update->title;
        $this->text      = $this->update->text;
        $this->img_update= $this->update->image;
        $this->ch_update = true;
    }

    public function update() {
        $this->validate([
            'title' => 'required',
            'text' => 'required',
        ],
        [
            'required'  => 'يرجى ادخال البيانات ',
        ]);

        if ($this->img != null) {
            $image = $this->img->store('news', 'images_car');
            $this->validate([
                'img' => 'required|mimes:png,jpg,pdf',
            ],
            [
                'required'  => 'يرجى ادخال البيانات ',
                'mimes'     => 'يجب ان تكون صورة',
            ]);
        } else {
            $image = $this->img_update;
        }
        $this->update->update([
            'title' => $this->title,
            'text'  => $this->text,
            'image' => $image,
        ]);
        $this->update->save();
        session()->flash('Add', 'تم التعديل ');

        $this->ch_update = false;
        $this->title     = '';
        $this->text      = '';
        $this->img       = '';
    }

    public function clouse() {
        $this->ch_update = false;
        $this->title     = '';
        $this->text      = '';
        $this->img       = '';
    }

    public function delete($news_id){
        News::destroy($news_id);
        session()->flash('Add', 'تمت حذف الخبر');
    }

    public function render()
    {
        $news = News::OrderBy('id', 'DESC')->get();
        return view('livewire.news-live', compact('news'));
    }
}
