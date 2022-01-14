<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Linea;

class LineasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linea = new Linea();
        $linea->id = 1;
        $linea->nombre = 'Kids';
        $linea->save();

        $linea = new Linea();
        $linea->id = 2;
        $linea->nombre = 'Women';
        $linea->save();

        $linea = new Linea();
        $linea->id = 3;
        $linea->nombre = 'Men';
        $linea->save();

    }
}
