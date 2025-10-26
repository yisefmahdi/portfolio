<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'category_id',
        'module_cars_id',
        'year_made',
        'desc',
        'price',
        'motion_vector',
        'engine_capacity',
        'km',
        'user_id',
        'fuel_id',
        'state_id',
        'outer_shapes_id',
        'stutas',
    ];

    public function module_car() {
        return $this->belongsTo(Module_Car::class, 'module_cars_id');
    }

    public function category() {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    public function company() {
        return $this->belongsTo(Companie::class, 'company_id');
    }

    public function user_car() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function state_car() {
        return $this->belongsTo(States::class, 'state_id');
    }

    public function fuel_car() {
        return $this->belongsTo(Fuel::class, 'fuel_id');
    }

    public function Outer_Shape_car() {
        return $this->belongsTo(Outer_Shape::class, 'outer_shapes_id');
    }

    public function image_car() {
        return $this->hasMany(Image_car::class, 'advertisement_id');
    }


}
