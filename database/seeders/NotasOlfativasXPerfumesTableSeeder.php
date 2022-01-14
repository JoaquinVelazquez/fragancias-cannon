<?php

namespace Database\Seeders;

use App\Models\Perfume;
use Illuminate\Database\Seeder;

class NotasOlfativasXPerfumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfume = Perfume::find(46);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->addNotaOlfativaPorNombre("ozonico");
        $perfume->save();

        $perfume = Perfume::find(92);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("verde");
        $perfume->save();

        $perfume = Perfume::find(91);
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(54);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(56);
        $perfume->addNotaOlfativaPorNombre("oriental");
        $perfume->addNotaOlfativaPorNombre("especiado");
        $perfume->save();

        $perfume = Perfume::find(94);
        $perfume->addNotaOlfativaPorNombre("oriental");
        $perfume->save();

        $perfume = Perfume::find(93);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->save();

        $perfume = Perfume::find(88);
        $perfume->addNotaOlfativaPorNombre("oriental");
        $perfume->save();

        $perfume = Perfume::find(51);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(52);
        $perfume->addNotaOlfativaPorNombre("aromatico");
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(50);
        $perfume->addNotaOlfativaPorNombre("aromatico");
        $perfume->addNotaOlfativaPorNombre("ozonico");
        $perfume->save();

        $perfume = Perfume::find(73);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(74);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(41);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(24);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(32);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(27);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(33);
        $perfume->addNotaOlfativaPorNombre("chipre");
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(23);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(35);
        $perfume->addNotaOlfativaPorNombre("floriental");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(34);
        $perfume->addNotaOlfativaPorNombre("floriental");
        $perfume->save();

        $perfume = Perfume::find(28);
        $perfume->addNotaOlfativaPorNombre("floriental");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(25);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(26);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(42);
        $perfume->addNotaOlfativaPorNombre("oriental");
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(48);
        $perfume->addNotaOlfativaPorNombre("aromatico");
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(47);
        $perfume->addNotaOlfativaPorNombre("aromatico");
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->save();

        $perfume = Perfume::find(45);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(3);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("verde");
        $perfume->save();

        $perfume = Perfume::find(2);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutado");
        $perfume->save();

        $perfume = Perfume::find(1);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("verde");
        $perfume->save();

        $perfume = Perfume::find(49);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("ambar");
        $perfume->save();

        $perfume = Perfume::find(16);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(21);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(20);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->addNotaOlfativaPorNombre("oriental");
        $perfume->save();

        $perfume = Perfume::find(19);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(22);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("oriental");
        $perfume->save();

        $perfume = Perfume::find(89);
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->addNotaOlfativaPorNombre("almizclado");
        $perfume->save();

        $perfume = Perfume::find(90);
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(76);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(75);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(78);
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(79);
        $perfume->addNotaOlfativaPorNombre("oriental");
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->save();

        $perfume = Perfume::find(77);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("musk");
        $perfume->save();

        $perfume = Perfume::find(17);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(37);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(81);
        $perfume->addNotaOlfativaPorNombre("oriental");
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(39);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(84);
        $perfume->addNotaOlfativaPorNombre("floriental");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(83);
        $perfume->addNotaOlfativaPorNombre("aromatico");
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(80);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->addNotaOlfativaPorNombre("aromatico");
        $perfume->save();

        $perfume = Perfume::find(38);
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->addNotaOlfativaPorNombre("marino");
        $perfume->save();

        $perfume = Perfume::find(82);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(40);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(85);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(36);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(62);
        $perfume->addNotaOlfativaPorNombre("oriental");
        $perfume->save();

        $perfume = Perfume::find(4);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("aldehido");
        $perfume->save();

        $perfume = Perfume::find(10);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(6);
        $perfume->addNotaOlfativaPorNombre("floriental");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(7);
        $perfume->addNotaOlfativaPorNombre("floriental");
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(5);
        $perfume->addNotaOlfativaPorNombre("floriental");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(9);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(18);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(44);
        $perfume->addNotaOlfativaPorNombre("chipre");
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->save();

        $perfume = Perfume::find(29);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(30);
        $perfume->addNotaOlfativaPorNombre("floriental");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(14);
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(11);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(15);
        $perfume->addNotaOlfativaPorNombre("aromatico");
        $perfume->addNotaOlfativaPorNombre("ozonico");
        $perfume->save();

        $perfume = Perfume::find(86);
        $perfume->addNotaOlfativaPorNombre("floriental");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(87);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(97);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(63);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(66);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(64);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(68);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(69);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(70);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(65);
        $perfume->addNotaOlfativaPorNombre("chipre");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(71);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(72);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->save();

        $perfume = Perfume::find(12);
        $perfume->addNotaOlfativaPorNombre("citrico");
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();

        $perfume = Perfume::find(43);
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->addNotaOlfativaPorNombre("fougere");
        $perfume->save();

        $perfume = Perfume::find(57);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->save();

        $perfume = Perfume::find(61);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(58);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("musk");
        $perfume->save();

        $perfume = Perfume::find(59);
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->addNotaOlfativaPorNombre("frutal");
        $perfume->save();

        $perfume = Perfume::find(60);
        $perfume->addNotaOlfativaPorNombre("amaderado");
        $perfume->addNotaOlfativaPorNombre("floral");
        $perfume->save();


    }
}
