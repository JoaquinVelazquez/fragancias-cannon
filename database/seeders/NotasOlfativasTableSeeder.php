<?php

namespace Database\Seeders;

use App\Models\NotaOlfativa;
use Illuminate\Database\Seeder;

class NotasOlfativasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotaOlfativa::create(["nombre" => "citrico"]);
        NotaOlfativa::create(["nombre" => "ozonico"]);
        NotaOlfativa::create(["nombre" => "floral"]);
        NotaOlfativa::create(["nombre" => "verde"]);
        NotaOlfativa::create(["nombre" => "frutal"]);
        NotaOlfativa::create(["nombre" => "fougere"]);
        NotaOlfativa::create(["nombre" => "oriental"]);
        NotaOlfativa::create(["nombre" => "especiado"]);
        NotaOlfativa::create(["nombre" => "aromatico"]);
        NotaOlfativa::create(["nombre" => "amaderado"]);
        NotaOlfativa::create(["nombre" => "chipre"]);
        NotaOlfativa::create(["nombre" => "floriental"]);
        NotaOlfativa::create(["nombre" => "frutado"]);
        NotaOlfativa::create(["nombre" => "ambar"]);
        NotaOlfativa::create(["nombre" => "almizclado"]);
        NotaOlfativa::create(["nombre" => "musk"]);
        NotaOlfativa::create(["nombre" => "marino"]);
        NotaOlfativa::create(["nombre" => "aldehido"]);
    }
}
