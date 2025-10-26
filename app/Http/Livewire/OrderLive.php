<?php

namespace App\Http\Livewire;

use App\Models\Advertisement;
use Livewire\Component;

class OrderLive extends Component
{

    public function order_true ($order_id) {
        $update = Advertisement::findorfail($order_id);
        $update->update([
            'stutas' => 1
        ]);
        $update->save();
        session()->flash('Add', 'تم قبول الاعلان');
    }

    public function order_false($order_id) {
        Advertisement::destroy($order_id);
        session()->flash('Add', 'تم حذف الاعلان ');
    }

    public function render()
    {
        $orders  = Advertisement::where('stutas', 0)->get();
        return view('livewire.order-live', compact('orders'));
    }
}
