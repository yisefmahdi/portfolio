<?php

namespace Database\Seeders;

use App\Models\Header_images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class image_header extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header_images::create([
            'id' => 1,
            'header_image' => 'header_images/header_img.jpg',
            'link' => '#',
        ]);
        Header_images::create([
            'id' => 2,
            'header_image' => 'header_images/header_img.jpg',
            'link' => '#',
        ]);
        Header_images::create([
            'id' => 3,
            'header_image' => 'header_images/header_img.jpg',
            'link' => '#',
        ]);
    }
}
