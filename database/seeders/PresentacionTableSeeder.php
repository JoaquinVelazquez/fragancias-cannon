<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Presentacion;

class PresentacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $presentacion = new Presentacion();
        $presentacion->id = 1;
        $presentacion->descripcion = "Eau de toilette";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 2;
        $presentacion->descripcion = "Desodorante en aerosol";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 3;
        $presentacion->descripcion = "Eau de parfum";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 4;
        $presentacion->descripcion = "Colonia";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 5;
        $presentacion->descripcion = "Shampoo";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 6;
        $presentacion->descripcion = "Jabonera con jabón";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 7;
        $presentacion->descripcion = "Conejo";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 8;
        $presentacion->descripcion = "Eau de cologne";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 9;
        $presentacion->descripcion = "After Shave";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 10;
        $presentacion->descripcion = "Antitranspirante sin alcohol en aerosol";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 11;
        $presentacion->descripcion = "Estuche Mini Bross: x3 ";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 12;
        $presentacion->descripcion = "Agua de colonia";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 13;
        $presentacion->descripcion = "Estuche";
        $presentacion->save();

        $presentacion = new Presentacion();
        $presentacion->id = 14;
        $presentacion->descripcion = "Neces. ";
        $presentacion->save();

    }
}
