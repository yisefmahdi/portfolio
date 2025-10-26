<?php

namespace App\Http\Livewire;

use App\Models\messages;
use App\Models\Setting;
use Livewire\Component;

class MessageLive extends Component
{
    public $ch_open = false;

    public $email, $text;

    public function add_message() {
        $this->validate([
            'email' => 'required|email',
            'text'  => 'required|string',
        ],
        [
            'required' => 'يرجى ادخال البيانات',
            'email'    => 'يجب ان يكون ايميل'
        ]);
        messages::create([
            'email' => $this->email,
            'text' => $this->text,
        ]);

        session()->flash('Add', 'تم الارسال شكرا لك ');
        $this->email = '';
        $this->text = '';
    }

    public function open() {
        if ($this->ch_open == true) {
            $this->ch_open = false;
        } else {
            $this->ch_open = true;
        }
    }

    public function render()
    {
        $setting = Setting::where('id', 1)->first();
        return view('livewire.message-live', compact('setting'));
    }
}
