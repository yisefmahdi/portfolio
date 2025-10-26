<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;

    protected $fillable = [
        'companey',
        'logo',
        'stutas',
    ];

    public function category_model () {
        return $this->hasMany(Categorie::class, 'company_id');
    }

    public function advcars() {
        return $this->hasMany(Advertisement::class, 'company_id');
    }
    public function model() {
        return $this->hasMany(Module_Car::class, 'company_id');
    }

    public function company_cars() {
        return $this->hasMany(Advertisement::class, 'company_id');
    }

    public function category() {
        return $this->hasMany(Categorie::class, 'company_id');
    }
    public function new_car() {
        return $this->hasMany(Car::class, 'company_id');
    }
}
