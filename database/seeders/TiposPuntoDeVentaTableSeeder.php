<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoPuntoDeVenta;

class TiposPuntoDeVentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = new TipoPuntoDeVenta();
        $tipo->id = 1;
        $tipo->nombre = "Farmacia";
        $tipo->save();

        $tipo = new TipoPuntoDeVenta();
        $tipo->id = 2;
        $tipo->nombre = "Perfumería";
        $tipo->save();

        $tipo = new TipoPuntoDeVenta();
        $tipo->id = 3;
        $tipo->nombre = "Tienda";
        $tipo->save();

        $tipo = new TipoPuntoDeVenta();
        $tipo->id = 4;
        $tipo->nombre = "Polirubro";
        $tipo->save();
    }
}
