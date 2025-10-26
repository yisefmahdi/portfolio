<?php

namespace Database\Seeders;

use App\Models\Outer_Shape;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sale_car extends Seeder
{

    public function run()
    {
        Outer_Shape::create([
            'id' => 1,
            'outer_shape' => 'كوبيه',
            'logo' => 'asset/img/coupe_unselected.png',
        ]);
        Outer_Shape::create([
            'id' => 2,
            'outer_shape' => 'SUV',
            'logo' => 'asset/img/suv_unselected.png',
        ]);
        Outer_Shape::create([
            'id' => 3,
            'outer_shape' => 'هاتشباك',
            'logo' => 'asset/img/hatchback_unselected.png',
        ]);
        Outer_Shape::create([
            'id' => 4,
            'outer_shape' => 'سيدان',
            'logo' => 'asset/img/sedan_unselected.png',
        ]);
        Outer_Shape::create([
            'id' => 5,
            'outer_shape' => 'بيك أب ',
            'logo' => 'asset/img/pickup_unselected.png',
        ]);
        Outer_Shape::create([
            'id' => 6,
            'outer_shape' => 'كابورليه',
            'logo' => 'asset/img/cabriolet_unselected.png',
        ]);
        Outer_Shape::create([
            'id' => 7,
            'outer_shape' => 'ستيشن',
            'logo' => 'asset/img/station_unselected.png',
        ]);
        Outer_Shape::create([
            'id' => 8,
            'outer_shape' => 'فان',
            'logo' => 'asset/img/pickup_unselected.png',
        ]);
    }


}
