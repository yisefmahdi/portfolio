<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function index () {
        return view('sale_car.create-sale-car');
    }

    public function my_adv_management() {
        return view('sale_car.My_ads_management');
    }

    public function view_all_car (){
        return view('sale_car.view_all_cars');
    }

    public function order () {
        return view('dashboard.order_adv');
    }
    public function view_car($id) {
        if (Advertisement::where('id', $id)->where('stutas', 0)->first()) {
            return view('404');
        } else {
            $car = Advertisement::where('id', $id)->where('stutas', 1)->first();
            return view('sale_car.view_car', compact('car'));
        }
    }
}
