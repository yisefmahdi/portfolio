<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $fillable = [
        'states',
    ];

    public function cars() {
        return $this->hasMany(Advertisement::class, 'state_id');
    }

    public function state_car() {
        return $this->hasOne(Advertisement::class);
    }
}
