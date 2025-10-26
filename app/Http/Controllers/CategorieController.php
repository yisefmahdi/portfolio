<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index () {
        return view('dashboard.model');
    }

    public function category () {
        return view('dashboard.category');
    }
}
