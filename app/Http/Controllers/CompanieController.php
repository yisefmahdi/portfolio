<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Categorie;
use App\Models\Companie;
use App\Models\Header_images;
use App\Models\Module_Car;
use App\Models\News;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    public function index_view() {
        $companies     = Companie::where('stutas', 1)->get();
        $header_images = Header_images::OrderBy('id', 'DESC')->get();
        $news = News::OrderBy('id', 'DESC')->get();
        return view('index_view', compact('companies', 'header_images', 'news'));
    }
    public function index() {
        return view('dashboard.marca');
    }

    public function new_car () {
        return view('dashboard.new_car');
    }

    public function view_companie($id) {
        $caompanies = Companie::findorfail($id);
        $category = Companie::findorfail($id)->category_model;
        return view('companey', compact('caompanies', 'category'));
    }

    public function view_car($id) {
        $car = Car::findorfail($id);
        return view('view_new_car', compact('car'));
    }

    public function view_allcar() {
        $cars      = Car::inRandomOrder()->get();
        $companies     = Companie::where('stutas', 1)->get();
        return view('all-new-car', compact('cars', 'companies'));
    }

    public function view_new_cars () {
        $cars = Car::OrderBy('id', "DESC")->get();
        return view('dashboard.view-new-cars', compact('cars'));
    }

    public function view_update_new_cars($id) {
        $update_car = Car::findorfail($id);
        return view('dashboard.update-new-car', compact('update_car'));
    }

    public function view_search () {
        return view('search');
    }

    public function view_search_md($id) {
        $category = Categorie::findorfail($id);
        $cars = Categorie::findorfail($id)->newcar;
        $companies = Companie::where('stutas', 1)->get();
        return view('pagesearch', compact('id', 'companies','cars', 'category'));
    }

        public function view_search_md_false($id) {
            $category = Categorie::findorfail($id);
            $cars_adv = Categorie::findorfail($id)->model_car;
            $companies     = Companie::where('stutas', 1)->get();
        return view('pagesearch2', compact('id', 'companies', 'cars_adv', 'category'));
    }



}
