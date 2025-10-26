<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outer_Shape extends Model
{
    use HasFactory;
    protected $fillable = [
        'outer_shape',
        'logo',
    ];
}
