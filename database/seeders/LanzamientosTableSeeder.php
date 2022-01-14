<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lanzamiento;

class LanzamientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lanzamiento = new Lanzamiento;
        $lanzamiento->nombre = "Kevin";
        $lanzamiento->orden = 1;
        $lanzamiento->perfume_id = 37;
        $lanzamiento->save();

        $lanzamiento1 = new Lanzamiento;
        $lanzamiento1->nombre = "Kevin Black";
        $lanzamiento1->orden = 1;
        $lanzamiento1->perfume_id = 39;
        $lanzamiento1->save();

        $lanzamiento2 = new Lanzamiento;
        $lanzamiento2->nombre = "Kevin Metal";
        $lanzamiento2->orden = 1;
        $lanzamiento2->perfume_id = 80;
        $lanzamiento2->save();

        $lanzamiento3 = new Lanzamiento;
        $lanzamiento3->nombre = "Ciel";
        $lanzamiento3->orden = 1;
        $lanzamiento3->perfume_id = 24;
        $lanzamiento3->save();

        $lanzamiento4 = new Lanzamiento;
        $lanzamiento4->nombre = "Colbert Code";
        $lanzamiento4->orden = 1;
        $lanzamiento4->perfume_id = 48;
        $lanzamiento4->save();

    }
}
