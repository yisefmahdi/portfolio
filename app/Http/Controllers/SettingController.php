<?php

namespace App\Http\Controllers;

use App\Models\messages;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // setting
    public function setting () {
        return view('dashboard.setting');
    }

    // header_image
    public function header_image () {
        return view('dashboard.header_image');
    }
    // message
    public function message () {
        $messages = messages::OrderBy('id', 'DESC')->get();
        return view('dashboard.message', compact('messages'));
    }

    public function message_delete($id) {
        messages::destroy($id);
        session()->flash('Add', 'تم حذف الرسالة');
        return redirect()->back();
    }
}
