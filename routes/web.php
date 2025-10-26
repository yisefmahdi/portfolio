<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CompanieController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StatesController;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Dashboard
    Route::middleware('admin')->group(function () {
        Route::get('dashboard/order', [AdvertisementController::class, 'order'])->name('dashboard.order');
        Route::get('dashboard/states', [StatesController::class, 'index'])->name('dashboard.states');
        Route::get('dashboard/marca', [CompanieController::class, 'index'])->name('dashboard.marca');
        Route::get('dashboard/model', [CategorieController::class, 'index'])->name('dashboard.model');
        Route::get('dashboard/category', [CategorieController::class, 'category'])->name('dashboard.category');
        Route::get('dashboard/header_image', [SettingController::class, 'header_image'])->name('dashboard.header_image');
        Route::get('dashboard/message', [SettingController::class, 'message'])->name('dashboard.message');
        Route::post('dashboard/message/d{id}', [SettingController::class, 'message_delete'])->name('dashboard.message.delete');
        Route::get('dashboard/setting', [SettingController::class, 'setting'])->name('dashboard.setting');
        Route::get('dashboard/news', [NewsController::class, 'index'])->name('dashboard.news');
        Route::get('dashboard/newCar', [CompanieController::class, 'new_car'])->name('dashboard.new.car');
        Route::get('dashboard/companie/cars', [CompanieController::class, 'view_new_cars'])->name('view.new.cars');
        Route::get('dashboard/companie/cars/update{id}', [CompanieController::class, 'view_update_new_cars'])->name('view.update.new.cars');
    });

    // createadv
    Route::get('createadv', [AdvertisementController::class, 'index'])->name('createadv');
    // My Adv Manag
    Route::get('my_adv_management', [AdvertisementController::class, 'my_adv_management'])->name('my_adv_management');
});

Route::get('/', [CompanieController::class, 'index_view'])->name('index_view');
Route::get('car/view_car{id}', [AdvertisementController::class, 'view_car'])->name('view_car');
Route::get('car/view_all_car', [AdvertisementController::class, 'view_all_car'])->name('view_all_car');
Route::get('/view_all_news', [NewsController::class, 'view_all_news'])->name('view.news');
Route::get('/view_all_news/news{id}', [NewsController::class, 'view_news'])->name('view.new');
Route::get('/companie{id}', [CompanieController::class, 'view_companie'])->name('view.companie');
Route::get('/companie/car{id}', [CompanieController::class, 'view_car'])->name('view.car');
Route::get('/companie/allcar', [CompanieController::class, 'view_allcar'])->name('view.allcar');
Route::get('/companie/search', [CompanieController::class, 'view_search'])->name('view.search');
Route::get('/companie/search/md{id}/true', [CompanieController::class, 'view_search_md'])->name('view.search.md.true');
Route::get('/companie/search/md{id}/false', [CompanieController::class, 'view_search_md_false'])->name('view.search.md.false');
require __DIR__.'/auth.php';

Route::get('/{page}', 'App\Http\Controllers\AdminController@index');

