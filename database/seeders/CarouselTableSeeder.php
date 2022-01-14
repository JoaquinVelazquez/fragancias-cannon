<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ImagenCarousel;

class CarouselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ic = new ImagenCarousel;
        $ic->nombre = "Kevin";
        $ic->link = "https://fonts.google.com/";
        $ic->orden = 1;
        $ic->save();

        $ic = new ImagenCarousel;
        $ic->nombre = "Kevin Metal";
        $ic->link = "";
        $ic->orden = 2;
        $ic->save();


    }
}
