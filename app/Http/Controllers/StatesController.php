<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatesController extends Controller
{
    public function index() {
        return view('dashboard.states');
    }
}
