<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'categotie',
        'company_id',
    ];

    public function category_company () {
        return $this->belongsTo(Companie::class, 'company_id');
    }

    public function module_cars() {
        return $this->belongsTo(Module_Car::class, 'module_cars_id');
    }

    public function name_car () {
        return $this->hasMany(Module_Car::class, 'category_id');
    }

    public function model_car() {
        return $this->hasMany(Advertisement::class, 'category_id');
    }
    public function newcar() {
        return $this->hasMany(Car::class, 'categorie_id');
    }
}
