<?php

namespace Database\Seeders;

use App\Models\Fuel as ModelsFuel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class fuel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsFuel::create([
            'id' => 1,
            'type' => 'غاز طبيعي',
        ]);
        ModelsFuel::create([
            'id' => 2,
            'type' => 'ديزل',
        ]);
        ModelsFuel::create([
            'id' => 3,
            'type' => 'بنزين',
        ]);
        ModelsFuel::create([
            'id' => 4,
            'type' => 'كهرباء',
        ]);
        ModelsFuel::create([
            'id' => 5,
            'type' => 'هجين',
        ]);
    }
}
