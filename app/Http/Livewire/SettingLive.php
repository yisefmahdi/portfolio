<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class SettingLive extends Component
{
    public $ch_update = false,
    $update, $facebook, $google, $twitter, $youtube;

    public function edit() {
        $this->ch_update = true;
        $this->update = Setting::findorfail(1);
        $this->facebook     = $this->update->facebook;
        $this->google       = $this->update->google;
        $this->twitter      = $this->update->twiter;
        $this->youtube      = $this->update->youtube;
    }

    public function update() {
        $this->validate([
            'facebook'  => 'required',
            'google'    => 'required',
            'twitter'   => 'required',
            'youtube'   => 'required',
        ]);
        $this->update->update([
            'facebook'  => $this->facebook,
            'google'    => $this->google ,
            'twiter'    => $this->twitter,
            'youtube'   => $this->youtube,
        ]);
        $this->update->save();
        session()->flash('Add', ' تمت تحديث الروابط   ');
        $this->ch_update    = false;
    }

    public function clouse () {
        $this->ch_update    = false;
        $this->facebook     = '';
        $this->google       = '';
        $this->twitter      = '';
        $this->youtube      = '';
    }
    public function render()
    {
        $setting = Setting::where('id', 1)->first();
        return view('livewire.setting-live', compact('setting'));
    }
}
