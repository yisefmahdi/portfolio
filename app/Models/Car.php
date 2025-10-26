<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_cars_id',
        'categorie_id',
        'price',
        'engine_capacity',
        'generation',
        'motion_vector',
        'torque',
        'average_consumption',
        'origin',
        'horse_power',
        'acceleration',
        'number_seats',
        'gather',
        'agent',
        'company_id',
        'outer_shapes_id',
    ];

    public function module_cars() {
        return $this->belongsTo(Module_Car::class, 'module_cars_id');
    }

    public function category_cars() {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function companey() {
        return $this->belongsTo(Companie::class, 'company_id');
    }
    public function images_car() {
        return $this->hasMany(Image::class, 'car_id');
    }
    public function Outer_Shape_car() {
        return $this->belongsTo(Outer_Shape::class, 'outer_shapes_id');
    }
}
