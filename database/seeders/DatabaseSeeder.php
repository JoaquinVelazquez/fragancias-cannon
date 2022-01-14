<?php

namespace Database\Seeders;

use App\Models\MasVendido;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LineasTableSeeder::class);
        $this->call(MarcasTableSeeder::class);
        $this->call(PresentacionTableSeeder::class);
        $this->call(PerfumesTableSeeder::class);
        $this->call(VariedadesTableSeeder::class);
        $this->call(PresentacionesXVariedadesTableSeeder::class);
        $this->call(EanSeeder::class);
        $this->call(TiposPuntoDeVentaTableSeeder::class);
        $this->call(PuntosDeVentaTableSeeder::class);
        $this->call(CoordenadasSeeder::class);
        $this->call(CarouselTableSeeder::class);
        $this->call(LanzamientosTableSeeder::class);
        $this->call(CampaniasTableSeeder::class);
        $this->call(NotasOlfativasTableSeeder::class);
        $this->call(NotasOlfativasXPerfumesTableSeeder::class);
        $this->call(MasVendidosTableSeeder::class);


    }
}
