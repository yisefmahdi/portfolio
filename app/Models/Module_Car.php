<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module_Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_car',
        'category_id',
        'company_id',
    ];

    public function company() {
        return $this->belongsTo(Companie::class, 'company_id');
    }
    public function category() {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    public function cars() {
        return $this->hasMany(Car::class, 'module_cars_id');
    }
    public function cars_adv() {
        return $this->hasMany(Advertisement::class, 'module_cars_id');
    }
}
