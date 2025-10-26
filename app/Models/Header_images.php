<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header_images extends Model
{
    use HasFactory;

    protected $fillable = [
        'header_image',
        'link',
    ];
}
