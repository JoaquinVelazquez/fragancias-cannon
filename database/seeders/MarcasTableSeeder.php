<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca = new Marca();
        $marca->id = 1;
        $marca->nombre = "Coqueterias";
        $marca->save();

        $marca = new Marca();
        $marca->id = 2;
        $marca->nombre = "Mujercitas";
        $marca->save();

        $marca = new Marca();
        $marca->id = 3;
        $marca->nombre = "Paco";
        $marca->save();

        $marca = new Marca();
        $marca->id = 4;
        $marca->nombre = "Pibes";
        $marca->save();

        $marca = new Marca();
        $marca->id = 5;
        $marca->nombre = "Danielle";
        $marca->save();

        $marca = new Marca();
        $marca->id = 6;
        $marca->nombre = "Flower";
        $marca->save();

        $marca = new Marca();
        $marca->id = 7;
        $marca->nombre = "Ciel";
        $marca->save();

        $marca = new Marca();
        $marca->id = 8;
        $marca->nombre = "L'extreme";
		$marca->save();
		
        $marca = new Marca();
        $marca->id = 9;
        $marca->nombre = "Kevin";
        $marca->save();

        $marca = new Marca();
        $marca->id = 10;
        $marca->nombre = "Chester";
        $marca->save();

        $marca = new Marca();
        $marca->id = 11;
        $marca->nombre = "Colbert";
        $marca->save();

        $marca = new Marca();
        $marca->id = 12;
        $marca->nombre = "Crandall";
        $marca->save();

        $marca = new Marca();
        $marca->id = 13;
        $marca->nombre = "Bross";
        $marca->save();

        $marca = new Marca();
        $marca->id = 14;
        $marca->nombre = "Alliance";
        $marca->save();

        $marca = new Marca();
        $marca->id = 15;
        $marca->nombre = "Prüne";
        $marca->save();

        $marca = new Marca();
        $marca->id = 16;
        $marca->nombre = "Paula Cahen D'anvers";
        $marca->save();

        $marca = new Marca();
        $marca->id = 17;
        $marca->nombre = "CaroCuore";
        $marca->save();

        $marca = new Marca();
        $marca->id = 18;
        $marca->nombre = "Gino Bogani";
        $marca->save();

        $marca = new Marca();
        $marca->id = 19;
        $marca->nombre = "La Dolfina";
        $marca->save();

        $marca = new Marca();
        $marca->id = 20;
        $marca->nombre = "Paloma Herrera";
        $marca->save();

        $marca = new Marca();
        $marca->id = 21;
        $marca->nombre = "Analía Maiorana";
        $marca->save();

        $marca = new Marca();
        $marca->id = 22;
        $marca->nombre = "Garçon García";
        $marca->save();

        $marca = new Marca();
        $marca->id = 23;
        $marca->nombre = "Akiabara";
        $marca->save();

        $marca = new Marca();
        $marca->id = 24;
        $marca->nombre = "Alvear";
        $marca->save();

        $marca = new Marca();
        $marca->id = 25;
        $marca->nombre = "Cannon";
        $marca->save();

        $marca = new Marca();
        $marca->id = 26;
        $marca->nombre = "Para Ti";
        $marca->save();
    }
}
