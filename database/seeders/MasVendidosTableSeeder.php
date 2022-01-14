<?php

namespace Database\Seeders;

use App\Models\MasVendido;
use App\Models\Perfume;
use Illuminate\Database\Seeder;

class MasVendidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++)
        {
        $mv = new MasVendido;
        $mv->perfume()->associate(Perfume::find($i+20));
        $mv->orden = $i;
        $mv->save();
        }
    }
}
