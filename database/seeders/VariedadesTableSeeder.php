<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Variedad;

class VariedadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variedad = new Variedad();
        $variedad->id = 1;
        $variedad->perfume_id = 1;
        $variedad->codigo_catalogo = "401/4";
        $variedad->activo = 1;
        $variedad->orden = 1;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 2;
        $variedad->perfume_id = 2;
        $variedad->codigo_catalogo = "412/5";
        $variedad->activo = 1;
        $variedad->orden = 2;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 3;
        $variedad->perfume_id = 3;
        $variedad->codigo_catalogo = "471/1";
        $variedad->activo = 1;
        $variedad->orden = 3;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 4;
        $variedad->perfume_id = 3;
        $variedad->codigo_catalogo = "470/3";
        $variedad->activo = 1;
        $variedad->orden = 4;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 5;
        $variedad->perfume_id = 3;
        $variedad->codigo_catalogo = "474/7";
        $variedad->activo = 1;
        $variedad->orden = 5;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 6;
        $variedad->perfume_id = 4;
        $variedad->codigo_catalogo = "5951/2";
        $variedad->activo = 1;
        $variedad->orden = 6;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 7;
        $variedad->perfume_id = 4;
        $variedad->codigo_catalogo = "5952/3";
        $variedad->activo = 1;
        $variedad->orden = 7;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 8;
        $variedad->perfume_id = 4;
        $variedad->codigo_catalogo = "5953/4";
        $variedad->activo = 1;
        $variedad->orden = 8;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 9;
        $variedad->perfume_id = 5;
        $variedad->codigo_catalogo = "900/2";
        $variedad->activo = 1;
        $variedad->orden = 9;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 10;
        $variedad->perfume_id = 5;
        $variedad->codigo_catalogo = "901/3";
        $variedad->activo = 1;
        $variedad->orden = 10;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 11;
        $variedad->perfume_id = 6;
        $variedad->codigo_catalogo = "910/4";
        $variedad->activo = 1;
        $variedad->orden = 11;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 12;
        $variedad->perfume_id = 6;
        $variedad->codigo_catalogo = "911/5";
        $variedad->activo = 1;
        $variedad->orden = 12;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 13;
        $variedad->perfume_id = 7;
        $variedad->codigo_catalogo = "166/4";
        $variedad->activo = 1;
        $variedad->orden = 13;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 14;
        $variedad->perfume_id = 8;
        $variedad->codigo_catalogo = "167/5";
        $variedad->activo = 0;
        $variedad->orden = 14;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 15;
        $variedad->perfume_id = 9;
        $variedad->codigo_catalogo = "625/2";
        $variedad->activo = 1;
        $variedad->orden = 15;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 16;
        $variedad->perfume_id = 9;
        $variedad->codigo_catalogo = "626/3";
        $variedad->activo = 1;
        $variedad->orden = 16;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 17;
        $variedad->perfume_id = 9;
        $variedad->codigo_catalogo = "6230/2";
        $variedad->activo = 1;
        $variedad->orden = 17;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 18;
        $variedad->perfume_id = 10;
        $variedad->codigo_catalogo = "627/4";
        $variedad->activo = 1;
        $variedad->orden = 18;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 19;
        $variedad->perfume_id = 10;
        $variedad->codigo_catalogo = "628/5";
        $variedad->activo = 1;
        $variedad->orden = 19;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 20;
        $variedad->perfume_id = 10;
        $variedad->codigo_catalogo = "6231/3";
        $variedad->activo = 1;
        $variedad->orden = 20;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 21;
        $variedad->perfume_id = 11;
        $variedad->codigo_catalogo = "6201/3";
        $variedad->activo = 1;
        $variedad->orden = 21;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 22;
        $variedad->perfume_id = 11;
        $variedad->codigo_catalogo = "6202/4";
        $variedad->activo = 1;
        $variedad->orden = 22;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 23;
        $variedad->perfume_id = 12;
        $variedad->codigo_catalogo = "501/6";
        $variedad->activo = 1;
        $variedad->orden = 23;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 24;
        $variedad->perfume_id = 13;
        $variedad->codigo_catalogo = "500/9";
        $variedad->activo = 1;
        $variedad->orden = 24;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 25;
        $variedad->perfume_id = 14;
        $variedad->codigo_catalogo = "1730/2";
        $variedad->activo = 1;
        $variedad->orden = 25;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 26;
        $variedad->perfume_id = 14;
        $variedad->codigo_catalogo = "1731/3";
        $variedad->activo = 1;
        $variedad->orden = 26;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 27;
        $variedad->perfume_id = 14;
        $variedad->codigo_catalogo = "1732/4";
        $variedad->activo = 1;
        $variedad->orden = 27;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 28;
        $variedad->perfume_id = 14;
        $variedad->codigo_catalogo = "1733/5";
        $variedad->activo = 1;
        $variedad->orden = 28;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 29;
        $variedad->perfume_id = 15;
        $variedad->codigo_catalogo = "1271/2";
        $variedad->activo = 1;
        $variedad->orden = 29;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 30;
        $variedad->perfume_id = 15;
        $variedad->codigo_catalogo = "1270/1";
        $variedad->activo = 1;
        $variedad->orden = 30;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 31;
        $variedad->perfume_id = 15;
        $variedad->codigo_catalogo = "1272/3";
        $variedad->activo = 1;
        $variedad->orden = 31;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 32;
        $variedad->perfume_id = 16;
        $variedad->codigo_catalogo = "440/5";
        $variedad->activo = 1;
        $variedad->orden = 32;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 33;
        $variedad->perfume_id = 16;
        $variedad->codigo_catalogo = "126/8";
        $variedad->activo = 1;
        $variedad->orden = 33;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 34;
        $variedad->perfume_id = 16;
        $variedad->codigo_catalogo = "124/6";
        $variedad->activo = 1;
        $variedad->orden = 34;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 35;
        $variedad->perfume_id = 16;
        $variedad->codigo_catalogo = "442/7";
        $variedad->activo = 1;
        $variedad->orden = 35;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 36;
        $variedad->perfume_id = 16;
        $variedad->codigo_catalogo = "441/6";
        $variedad->activo = 1;
        $variedad->orden = 36;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 37;
        $variedad->perfume_id = 17;
        $variedad->codigo_catalogo = "450/3";
        $variedad->activo = 1;
        $variedad->orden = 37;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 38;
        $variedad->perfume_id = 17;
        $variedad->codigo_catalogo = "451/4";
        $variedad->activo = 1;
        $variedad->orden = 38;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 39;
        $variedad->perfume_id = 18;
        $variedad->codigo_catalogo = "2920/3";
        $variedad->activo = 1;
        $variedad->orden = 39;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 40;
        $variedad->perfume_id = 18;
        $variedad->codigo_catalogo = "2921/4";
        $variedad->activo = 1;
        $variedad->orden = 40;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 41;
        $variedad->perfume_id = 18;
        $variedad->codigo_catalogo = "2922/5";
        $variedad->activo = 1;
        $variedad->orden = 41;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 42;
        $variedad->perfume_id = 18;
        $variedad->codigo_catalogo = "2925/8";
        $variedad->activo = 1;
        $variedad->orden = 42;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 43;
        $variedad->perfume_id = 18;
        $variedad->codigo_catalogo = "2923/6";
        $variedad->activo = 1;
        $variedad->orden = 43;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 44;
        $variedad->perfume_id = 19;
        $variedad->codigo_catalogo = "9711/5";
        $variedad->activo = 1;
        $variedad->orden = 44;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 45;
        $variedad->perfume_id = 20;
        $variedad->codigo_catalogo = "9710/4";
        $variedad->activo = 1;
        $variedad->orden = 45;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 46;
        $variedad->perfume_id = 21;
        $variedad->codigo_catalogo = "9712/6";
        $variedad->activo = 1;
        $variedad->orden = 46;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 47;
        $variedad->perfume_id = 22;
        $variedad->codigo_catalogo = "6685/1";
        $variedad->activo = 1;
        $variedad->orden = 47;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 48;
        $variedad->perfume_id = 22;
        $variedad->codigo_catalogo = "667/2";
        $variedad->activo = 1;
        $variedad->orden = 48;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 49;
        $variedad->perfume_id = 22;
        $variedad->codigo_catalogo = "664/4";
        $variedad->activo = 1;
        $variedad->orden = 49;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 50;
        $variedad->perfume_id = 23;
        $variedad->codigo_catalogo = "6191/4";
        $variedad->activo = 1;
        $variedad->orden = 50;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 51;
        $variedad->perfume_id = 23;
        $variedad->codigo_catalogo = "6190/3";
        $variedad->activo = 1;
        $variedad->orden = 51;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 52;
        $variedad->perfume_id = 23;
        $variedad->codigo_catalogo = "6192/5";
        $variedad->activo = 1;
        $variedad->orden = 52;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 53;
        $variedad->perfume_id = 24;
        $variedad->codigo_catalogo = "301/2";
        $variedad->activo = 1;
        $variedad->orden = 53;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 54;
        $variedad->perfume_id = 24;
        $variedad->codigo_catalogo = "302/3";
        $variedad->activo = 1;
        $variedad->orden = 54;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 55;
        $variedad->perfume_id = 24;
        $variedad->codigo_catalogo = "307/3";
        $variedad->activo = 1;
        $variedad->orden = 55;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 56;
        $variedad->perfume_id = 24;
        $variedad->codigo_catalogo = "304/5";
        $variedad->activo = 1;
        $variedad->orden = 56;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 57;
        $variedad->perfume_id = 24;
        $variedad->codigo_catalogo = "303/4";
        $variedad->activo = 1;
        $variedad->orden = 57;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 58;
        $variedad->perfume_id = 25;
        $variedad->codigo_catalogo = "8441/2";
        $variedad->activo = 1;
        $variedad->orden = 58;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 59;
        $variedad->perfume_id = 25;
        $variedad->codigo_catalogo = "8443/4";
        $variedad->activo = 1;
        $variedad->orden = 59;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 60;
        $variedad->perfume_id = 26;
        $variedad->codigo_catalogo = "9621/5";
        $variedad->activo = 1;
        $variedad->orden = 60;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 61;
        $variedad->perfume_id = 26;
        $variedad->codigo_catalogo = "9623/7";
        $variedad->activo = 1;
        $variedad->orden = 61;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 62;
        $variedad->perfume_id = 27;
        $variedad->codigo_catalogo = "320/2";
        $variedad->activo = 1;
        $variedad->orden = 62;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 63;
        $variedad->perfume_id = 27;
        $variedad->codigo_catalogo = "322/4";
        $variedad->activo = 1;
        $variedad->orden = 63;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 64;
        $variedad->perfume_id = 28;
        $variedad->codigo_catalogo = "641/2";
        $variedad->activo = 1;
        $variedad->orden = 64;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 65;
        $variedad->perfume_id = 28;
        $variedad->codigo_catalogo = "642/3";
        $variedad->activo = 1;
        $variedad->orden = 65;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 66;
        $variedad->perfume_id = 28;
        $variedad->codigo_catalogo = "648/2";
        $variedad->activo = 1;
        $variedad->orden = 66;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 67;
        $variedad->perfume_id = 28;
        $variedad->codigo_catalogo = "644/5";
        $variedad->activo = 1;
        $variedad->orden = 67;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 68;
        $variedad->perfume_id = 28;
        $variedad->codigo_catalogo = "645/6";
        $variedad->activo = 1;
        $variedad->orden = 68;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 69;
        $variedad->perfume_id = 29;
        $variedad->codigo_catalogo = "7450/2";
        $variedad->activo = 1;
        $variedad->orden = 69;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 70;
        $variedad->perfume_id = 30;
        $variedad->codigo_catalogo = "7451/3";
        $variedad->activo = 1;
        $variedad->orden = 70;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 71;
        $variedad->perfume_id = 31;
        $variedad->codigo_catalogo = "7452/4";
        $variedad->activo = 0;
        $variedad->orden = 71;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 72;
        $variedad->perfume_id = 32;
        $variedad->codigo_catalogo = "240/1";
        $variedad->activo = 1;
        $variedad->orden = 72;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 73;
        $variedad->perfume_id = 32;
        $variedad->codigo_catalogo = "241/2";
        $variedad->activo = 1;
        $variedad->orden = 73;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 74;
        $variedad->perfume_id = 32;
        $variedad->codigo_catalogo = "243/4";
        $variedad->activo = 1;
        $variedad->orden = 74;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 75;
        $variedad->perfume_id = 32;
        $variedad->codigo_catalogo = "242/3";
        $variedad->activo = 1;
        $variedad->orden = 75;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 76;
        $variedad->perfume_id = 32;
        $variedad->codigo_catalogo = "246/8";
        $variedad->activo = 1;
        $variedad->orden = 76;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 77;
        $variedad->perfume_id = 32;
        $variedad->codigo_catalogo = "245/7";
        $variedad->activo = 0;
        $variedad->orden = 77;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 78;
        $variedad->perfume_id = 33;
        $variedad->codigo_catalogo = "2660/3";
        $variedad->activo = 1;
        $variedad->orden = 78;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 79;
        $variedad->perfume_id = 33;
        $variedad->codigo_catalogo = "2662/5";
        $variedad->activo = 1;
        $variedad->orden = 79;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 80;
        $variedad->perfume_id = 33;
        $variedad->codigo_catalogo = "2667/2";
        $variedad->activo = 1;
        $variedad->orden = 80;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 81;
        $variedad->perfume_id = 34;
        $variedad->codigo_catalogo = "1540/3";
        $variedad->activo = 1;
        $variedad->orden = 81;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 82;
        $variedad->perfume_id = 34;
        $variedad->codigo_catalogo = "1541/4";
        $variedad->activo = 1;
        $variedad->orden = 82;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 83;
        $variedad->perfume_id = 34;
        $variedad->codigo_catalogo = "1542/5";
        $variedad->activo = 1;
        $variedad->orden = 83;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 84;
        $variedad->perfume_id = 34;
        $variedad->codigo_catalogo = "1543/6";
        $variedad->activo = 1;
        $variedad->orden = 84;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 85;
        $variedad->perfume_id = 34;
        $variedad->codigo_catalogo = "1544/7";
        $variedad->activo = 1;
        $variedad->orden = 85;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 86;
        $variedad->perfume_id = 34;
        $variedad->codigo_catalogo = "1545/8";
        $variedad->activo = 1;
        $variedad->orden = 86;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 87;
        $variedad->perfume_id = 35;
        $variedad->codigo_catalogo = "2950/2";
        $variedad->activo = 1;
        $variedad->orden = 87;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 88;
        $variedad->perfume_id = 35;
        $variedad->codigo_catalogo = "2951/3";
        $variedad->activo = 1;
        $variedad->orden = 88;
        $variedad->limited = 0;
        $variedad->save();


        $variedad = new Variedad();
        $variedad->id = 89;
        $variedad->perfume_id = 35;
        $variedad->codigo_catalogo = "2954/6";
        $variedad->activo = 1;
        $variedad->orden = 89;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 90;
        $variedad->perfume_id = 35;
        $variedad->codigo_catalogo = "2952/4";
        $variedad->activo = 1;
        $variedad->orden = 90;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 91;
        $variedad->perfume_id = 35;
        $variedad->codigo_catalogo = "2953/5";
        $variedad->activo = 1;
        $variedad->orden = 91;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 92;
        $variedad->perfume_id = 36;
        $variedad->codigo_catalogo = "2435/6";
        $variedad->activo = 1;
        $variedad->orden = 92;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 93;
        $variedad->perfume_id = 36;
        $variedad->codigo_catalogo = "2436/7";
        $variedad->activo = 1;
        $variedad->orden = 93;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 94;
        $variedad->perfume_id = 37;
        $variedad->codigo_catalogo = "371/2";
        $variedad->activo = 1;
        $variedad->orden = 94;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 95;
        $variedad->perfume_id = 37;
        $variedad->codigo_catalogo = "370/1";
        $variedad->activo = 1;
        $variedad->orden = 95;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 96;
        $variedad->perfume_id = 37;
        $variedad->codigo_catalogo = "374/5";
        $variedad->activo = 1;
        $variedad->orden = 96;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 97;
        $variedad->perfume_id = 37;
        $variedad->codigo_catalogo = "372/3";
        $variedad->activo = 1;
        $variedad->orden = 97;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 98;
        $variedad->perfume_id = 37;
        $variedad->codigo_catalogo = "373/4";
        $variedad->activo = 1;
        $variedad->orden = 98;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 99;
        $variedad->perfume_id = 37;
        $variedad->codigo_catalogo = "376/3";
        $variedad->activo = 1;
        $variedad->orden = 99;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 100;
        $variedad->perfume_id = 37;
        $variedad->codigo_catalogo = "375/6";
        $variedad->activo = 1;
        $variedad->orden = 100;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 101;
        $variedad->perfume_id = 38;
        $variedad->codigo_catalogo = "1641/3";
        $variedad->activo = 1;
        $variedad->orden = 101;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 102;
        $variedad->perfume_id = 38;
        $variedad->codigo_catalogo = "1644/5";
        $variedad->activo = 1;
        $variedad->orden = 102;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 103;
        $variedad->perfume_id = 38;
        $variedad->codigo_catalogo = "1645/2";
        $variedad->activo = 1;
        $variedad->orden = 103;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 104;
        $variedad->perfume_id = 39;
        $variedad->codigo_catalogo = "181/2";
        $variedad->activo = 1;
        $variedad->orden = 104;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 105;
        $variedad->perfume_id = 39;
        $variedad->codigo_catalogo = "180/1";
        $variedad->activo = 1;
        $variedad->orden = 105;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 106;
        $variedad->perfume_id = 39;
        $variedad->codigo_catalogo = "183/4";
        $variedad->activo = 1;
        $variedad->orden = 106;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 107;
        $variedad->perfume_id = 39;
        $variedad->codigo_catalogo = "184/5";
        $variedad->activo = 1;
        $variedad->orden = 107;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 108;
        $variedad->perfume_id = 39;
        $variedad->codigo_catalogo = "185/2";
        $variedad->activo = 1;
        $variedad->orden = 108;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 109;
        $variedad->perfume_id = 40;
        $variedad->codigo_catalogo = "6031/3";
        $variedad->activo = 1;
        $variedad->orden = 109;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 110;
        $variedad->perfume_id = 40;
        $variedad->codigo_catalogo = "6030/2";
        $variedad->activo = 1;
        $variedad->orden = 110;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 111;
        $variedad->perfume_id = 40;
        $variedad->codigo_catalogo = "6033/5";
        $variedad->activo = 1;
        $variedad->orden = 111;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 112;
        $variedad->perfume_id = 40;
        $variedad->codigo_catalogo = "6034/6";
        $variedad->activo = 1;
        $variedad->orden = 112;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 113;
        $variedad->perfume_id = 41;
        $variedad->codigo_catalogo = "600/3";
        $variedad->activo = 1;
        $variedad->orden = 113;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 114;
        $variedad->perfume_id = 41;
        $variedad->codigo_catalogo = "602/5";
        $variedad->activo = 1;
        $variedad->orden = 114;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 115;
        $variedad->perfume_id = 41;
        $variedad->codigo_catalogo = "601/4";
        $variedad->activo = 1;
        $variedad->orden = 115;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 116;
        $variedad->perfume_id = 41;
        $variedad->codigo_catalogo = "603/6";
        $variedad->activo = 1;
        $variedad->orden = 116;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 117;
        $variedad->perfume_id = 41;
        $variedad->codigo_catalogo = "604/7";
        $variedad->activo = 1;
        $variedad->orden = 117;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 118;
        $variedad->perfume_id = 41;
        $variedad->codigo_catalogo = "605/8";
        $variedad->activo = 1;
        $variedad->orden = 118;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 119;
        $variedad->perfume_id = 41;
        $variedad->codigo_catalogo = "606/9";
        $variedad->activo = 1;
        $variedad->orden = 119;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 120;
        $variedad->perfume_id = 41;
        $variedad->codigo_catalogo = "607/1";
        $variedad->activo = 1;
        $variedad->orden = 120;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 121;
        $variedad->perfume_id = 42;
        $variedad->codigo_catalogo = "1920/4";
        $variedad->activo = 1;
        $variedad->orden = 121;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 122;
        $variedad->perfume_id = 42;
        $variedad->codigo_catalogo = "1924/8";
        $variedad->activo = 1;
        $variedad->orden = 122;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 123;
        $variedad->perfume_id = 42;
        $variedad->codigo_catalogo = "2923/7";
        $variedad->activo = 0;
        $variedad->orden = 123;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 124;
        $variedad->perfume_id = 43;
        $variedad->codigo_catalogo = "5714/2";
        $variedad->activo = 1;
        $variedad->orden = 124;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 125;
        $variedad->perfume_id = 43;
        $variedad->codigo_catalogo = "5716/4";
        $variedad->activo = 1;
        $variedad->orden = 125;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 126;
        $variedad->perfume_id = 43;
        $variedad->codigo_catalogo = "5715/3";
        $variedad->activo = 1;
        $variedad->orden = 126;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 127;
        $variedad->perfume_id = 44;
        $variedad->codigo_catalogo = "1744/3";
        $variedad->activo = 1;
        $variedad->orden = 127;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 128;
        $variedad->perfume_id = 44;
        $variedad->codigo_catalogo = "1743/2";
        $variedad->activo = 1;
        $variedad->orden = 128;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 129;
        $variedad->perfume_id = 44;
        $variedad->codigo_catalogo = "1747/6";
        $variedad->activo = 1;
        $variedad->orden = 129;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 130;
        $variedad->perfume_id = 44;
        $variedad->codigo_catalogo = "1746/5";
        $variedad->activo = 1;
        $variedad->orden = 130;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 131;
        $variedad->perfume_id = 45;
        $variedad->codigo_catalogo = "870/1";
        $variedad->activo = 1;
        $variedad->orden = 131;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 132;
        $variedad->perfume_id = 45;
        $variedad->codigo_catalogo = "872/3";
        $variedad->activo = 1;
        $variedad->orden = 132;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 133;
        $variedad->perfume_id = 45;
        $variedad->codigo_catalogo = "871/2";
        $variedad->activo = 1;
        $variedad->orden = 133;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 134;
        $variedad->perfume_id = 46;
        $variedad->codigo_catalogo = "280/1";
        $variedad->activo = 1;
        $variedad->orden = 134;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 135;
        $variedad->perfume_id = 46;
        $variedad->codigo_catalogo = "281/9";
        $variedad->activo = 1;
        $variedad->orden = 135;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 136;
        $variedad->perfume_id = 46;
        $variedad->codigo_catalogo = "285/8";
        $variedad->activo = 1;
        $variedad->orden = 136;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 137;
        $variedad->perfume_id = 46;
        $variedad->codigo_catalogo = "286/5";
        $variedad->activo = 1;
        $variedad->orden = 137;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 138;
        $variedad->perfume_id = 46;
        $variedad->codigo_catalogo = "2840/3";
        $variedad->activo = 1;
        $variedad->orden = 138;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 139;
        $variedad->perfume_id = 47;
        $variedad->codigo_catalogo = "7422/5";
        $variedad->activo = 1;
        $variedad->orden = 139;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 140;
        $variedad->perfume_id = 47;
        $variedad->codigo_catalogo = "7424/7";
        $variedad->activo = 1;
        $variedad->orden = 140;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 141;
        $variedad->perfume_id = 47;
        $variedad->codigo_catalogo = "7425/8";
        $variedad->activo = 1;
        $variedad->orden = 141;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 142;
        $variedad->perfume_id = 48;
        $variedad->codigo_catalogo = "1870/4";
        $variedad->activo = 1;
        $variedad->orden = 142;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 143;
        $variedad->perfume_id = 48;
        $variedad->codigo_catalogo = "1871/5";
        $variedad->activo = 1;
        $variedad->orden = 143;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 144;
        $variedad->perfume_id = 48;
        $variedad->codigo_catalogo = "1873/7";
        $variedad->activo = 1;
        $variedad->orden = 144;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 145;
        $variedad->perfume_id = 48;
        $variedad->codigo_catalogo = "1872/6";
        $variedad->activo = 1;
        $variedad->orden = 145;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 146;
        $variedad->perfume_id = 49;
        $variedad->codigo_catalogo = "700/6";
        $variedad->activo = 1;
        $variedad->orden = 146;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 147;
        $variedad->perfume_id = 49;
        $variedad->codigo_catalogo = "720/7";
        $variedad->activo = 1;
        $variedad->orden = 147;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 148;
        $variedad->perfume_id = 49;
        $variedad->codigo_catalogo = "709/1";
        $variedad->activo = 1;
        $variedad->orden = 148;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 149;
        $variedad->perfume_id = 50;
        $variedad->codigo_catalogo = "5722/5";
        $variedad->activo = 1;
        $variedad->orden = 149;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 150;
        $variedad->perfume_id = 50;
        $variedad->codigo_catalogo = "5725/8";
        $variedad->activo = 1;
        $variedad->orden = 150;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 151;
        $variedad->perfume_id = 51;
        $variedad->codigo_catalogo = "5721/4";
        $variedad->activo = 1;
        $variedad->orden = 151;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 152;
        $variedad->perfume_id = 51;
        $variedad->codigo_catalogo = "5724/7";
        $variedad->activo = 1;
        $variedad->orden = 152;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 153;
        $variedad->perfume_id = 52;
        $variedad->codigo_catalogo = "5720/3";
        $variedad->activo = 1;
        $variedad->orden = 153;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 154;
        $variedad->perfume_id = 52;
        $variedad->codigo_catalogo = "5723/6";
        $variedad->activo = 1;
        $variedad->orden = 154;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 155;
        $variedad->perfume_id = 50;
        $variedad->codigo_catalogo = "5733/4";
        $variedad->activo = 1;
        $variedad->orden = 155;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 156;
        $variedad->perfume_id = 51;
        $variedad->codigo_catalogo = "5732/3";
        $variedad->activo = 1;
        $variedad->orden = 156;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 157;
        $variedad->perfume_id = 52;
        $variedad->codigo_catalogo = "5731/2";
        $variedad->activo = 1;
        $variedad->orden = 157;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 158;
        $variedad->perfume_id = 53;
        $variedad->codigo_catalogo = "5729/2";
        $variedad->activo = 1;
        $variedad->orden = 158;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 159;
        $variedad->perfume_id = 54;
        $variedad->codigo_catalogo = "150/2";
        $variedad->activo = 1;
        $variedad->orden = 159;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 160;
        $variedad->perfume_id = 54;
        $variedad->codigo_catalogo = "151/3";
        $variedad->activo = 1;
        $variedad->orden = 160;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 161;
        $variedad->perfume_id = 54;
        $variedad->codigo_catalogo = "153/5";
        $variedad->activo = 1;
        $variedad->orden = 161;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 162;
        $variedad->perfume_id = 55;
        $variedad->codigo_catalogo = "132/3";
        $variedad->activo = 1;
        $variedad->orden = 162;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 163;
        $variedad->perfume_id = 55;
        $variedad->codigo_catalogo = "131/2";
        $variedad->activo = 1;
        $variedad->orden = 163;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 164;
        $variedad->perfume_id = 55;
        $variedad->codigo_catalogo = "133/4";
        $variedad->activo = 1;
        $variedad->orden = 164;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 165;
        $variedad->perfume_id = 55;
        $variedad->codigo_catalogo = "136/6";
        $variedad->activo = 1;
        $variedad->orden = 165;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 166;
        $variedad->perfume_id = 56;
        $variedad->codigo_catalogo = "1914/7";
        $variedad->activo = 1;
        $variedad->orden = 166;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 167;
        $variedad->perfume_id = 56;
        $variedad->codigo_catalogo = "1913/6";
        $variedad->activo = 1;
        $variedad->orden = 167;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 168;
        $variedad->perfume_id = 56;
        $variedad->codigo_catalogo = "1915/8";
        $variedad->activo = 1;
        $variedad->orden = 168;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 169;
        $variedad->perfume_id = 56;
        $variedad->codigo_catalogo = "1916/9";
        $variedad->activo = 1;
        $variedad->orden = 169;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 170;
        $variedad->perfume_id = 57;
        $variedad->codigo_catalogo = "490/2";
        $variedad->activo = 1;
        $variedad->orden = 170;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 171;
        $variedad->perfume_id = 58;
        $variedad->codigo_catalogo = "491/3";
        $variedad->activo = 1;
        $variedad->orden = 171;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 172;
        $variedad->perfume_id = 59;
        $variedad->codigo_catalogo = "492/4";
        $variedad->activo = 1;
        $variedad->orden = 172;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 173;
        $variedad->perfume_id = 60;
        $variedad->codigo_catalogo = "496/9";
        $variedad->activo = 1;
        $variedad->orden = 173;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 174;
        $variedad->perfume_id = 58;
        $variedad->codigo_catalogo = "4961/3";
        $variedad->activo = 1;
        $variedad->orden = 174;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 175;
        $variedad->perfume_id = 59;
        $variedad->codigo_catalogo = "4962/4";
        $variedad->activo = 1;
        $variedad->orden = 175;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 176;
        $variedad->perfume_id = 57;
        $variedad->codigo_catalogo = "493/5";
        $variedad->activo = 1;
        $variedad->orden = 176;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 177;
        $variedad->perfume_id = 58;
        $variedad->codigo_catalogo = "494/6";
        $variedad->activo = 1;
        $variedad->orden = 177;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 178;
        $variedad->perfume_id = 59;
        $variedad->codigo_catalogo = "495/7";
        $variedad->activo = 1;
        $variedad->orden = 178;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 179;
        $variedad->perfume_id = 60;
        $variedad->codigo_catalogo = "497/8";
        $variedad->activo = 1;
        $variedad->orden = 179;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 180;
        $variedad->perfume_id = 61;
        $variedad->codigo_catalogo = "390/1";
        $variedad->activo = 1;
        $variedad->orden = 180;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 181;
        $variedad->perfume_id = 61;
        $variedad->codigo_catalogo = "391/2";
        $variedad->activo = 1;
        $variedad->orden = 181;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 182;
        $variedad->perfume_id = 62;
        $variedad->codigo_catalogo = "2030/3";
        $variedad->activo = 1;
        $variedad->orden = 182;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 183;
        $variedad->perfume_id = 62;
        $variedad->codigo_catalogo = "2031/3";
        $variedad->activo = 1;
        $variedad->orden = 183;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 184;
        $variedad->perfume_id = 63;
        $variedad->codigo_catalogo = "454/1";
        $variedad->activo = 1;
        $variedad->orden = 184;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 185;
        $variedad->perfume_id = 63;
        $variedad->codigo_catalogo = "453/4";
        $variedad->activo = 1;
        $variedad->orden = 185;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 186;
        $variedad->perfume_id = 63;
        $variedad->codigo_catalogo = "6783/1";
        $variedad->activo = 1;
        $variedad->orden = 186;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 187;
        $variedad->perfume_id = 63;
        $variedad->codigo_catalogo = "455/9";
        $variedad->activo = 1;
        $variedad->orden = 187;
        $variedad->limited = 0;
        $variedad->save();


        $variedad = new Variedad();
        $variedad->id = 188;
        $variedad->perfume_id = 64;
        $variedad->codigo_catalogo = "419/2";
        $variedad->activo = 1;
        $variedad->orden = 188;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 189;
        $variedad->perfume_id = 64;
        $variedad->codigo_catalogo = "418/3";
        $variedad->activo = 1;
        $variedad->orden = 189;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 190;
        $variedad->perfume_id = 64;
        $variedad->codigo_catalogo = "6784/3";
        $variedad->activo = 1;
        $variedad->orden = 190;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 191;
        $variedad->perfume_id = 64;
        $variedad->codigo_catalogo = "420/4";
        $variedad->activo = 1;
        $variedad->orden = 191;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 192;
        $variedad->perfume_id = 65;
        $variedad->codigo_catalogo = "591/2";
        $variedad->activo = 1;
        $variedad->orden = 192;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 193;
        $variedad->perfume_id = 65;
        $variedad->codigo_catalogo = "590/3";
        $variedad->activo = 1;
        $variedad->orden = 193;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 194;
        $variedad->perfume_id = 65;
        $variedad->codigo_catalogo = "592/4";
        $variedad->activo = 1;
        $variedad->orden = 194;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 195;
        $variedad->perfume_id = 66;
        $variedad->codigo_catalogo = "8431/4";
        $variedad->activo = 1;
        $variedad->orden = 195;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 196;
        $variedad->perfume_id = 66;
        $variedad->codigo_catalogo = "8430/3";
        $variedad->activo = 1;
        $variedad->orden = 196;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 197;
        $variedad->perfume_id = 66;
        $variedad->codigo_catalogo = "8432/5";
        $variedad->activo = 1;
        $variedad->orden = 197;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 198;
        $variedad->perfume_id = 67;
        $variedad->codigo_catalogo = "2761/3";
        $variedad->activo = 1;
        $variedad->orden = 198;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 199;
        $variedad->perfume_id = 67;
        $variedad->codigo_catalogo = "2760/2";
        $variedad->activo = 0;
        $variedad->orden = 199;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 200;
        $variedad->perfume_id = 67;
        $variedad->codigo_catalogo = "2762/4";
        $variedad->activo = 1;
        $variedad->orden = 200;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 201;
        $variedad->perfume_id = 68;
        $variedad->codigo_catalogo = "1735/2";
        $variedad->activo = 1;
        $variedad->orden = 201;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 202;
        $variedad->perfume_id = 69;
        $variedad->codigo_catalogo = "1736/3";
        $variedad->activo = 1;
        $variedad->orden = 202;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 203;
        $variedad->perfume_id = 70;
        $variedad->codigo_catalogo = "1737/4";
        $variedad->activo = 1;
        $variedad->orden = 203;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 204;
        $variedad->perfume_id = 72;
        $variedad->codigo_catalogo = "432/4";
        $variedad->activo = 1;
        $variedad->orden = 204;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 205;
        $variedad->perfume_id = 71;
        $variedad->codigo_catalogo = "422/5";
        $variedad->activo = 1;
        $variedad->orden = 205;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 206;
        $variedad->perfume_id = 71;
        $variedad->codigo_catalogo = "428/4";
        $variedad->activo = 1;
        $variedad->orden = 206;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 207;
        $variedad->perfume_id = 73;
        $variedad->codigo_catalogo = "653/6";
        $variedad->activo = 1;
        $variedad->orden = 207;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 208;
        $variedad->perfume_id = 73;
        $variedad->codigo_catalogo = "652/5";
        $variedad->activo = 1;
        $variedad->orden = 208;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 209;
        $variedad->perfume_id = 73;
        $variedad->codigo_catalogo = "654/7";
        $variedad->activo = 1;
        $variedad->orden = 209;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 210;
        $variedad->perfume_id = 74;
        $variedad->codigo_catalogo = "761/3";
        $variedad->activo = 1;
        $variedad->orden = 210;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 211;
        $variedad->perfume_id = 74;
        $variedad->codigo_catalogo = "760/2";
        $variedad->activo = 1;
        $variedad->orden = 211;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 212;
        $variedad->perfume_id = 74;
        $variedad->codigo_catalogo = "762/4";
        $variedad->activo = 1;
        $variedad->orden = 212;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 213;
        $variedad->perfume_id = 75;
        $variedad->codigo_catalogo = "5212/4";
        $variedad->activo = 1;
        $variedad->orden = 213;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 214;
        $variedad->perfume_id = 75;
        $variedad->codigo_catalogo = "5214/7";
        $variedad->activo = 1;
        $variedad->orden = 214;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 215;
        $variedad->perfume_id = 75;
        $variedad->codigo_catalogo = "5213/5";
        $variedad->activo = 1;
        $variedad->orden = 215;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 216;
        $variedad->perfume_id = 76;
        $variedad->codigo_catalogo = "1022/9";
        $variedad->activo = 1;
        $variedad->orden = 216;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 217;
        $variedad->perfume_id = 76;
        $variedad->codigo_catalogo = "1021/3";
        $variedad->activo = 1;
        $variedad->orden = 217;
        $variedad->limited = 0;
        $variedad->save();


        $variedad = new Variedad();
        $variedad->id = 218;
        $variedad->perfume_id = 76;
        $variedad->codigo_catalogo = "1023/8";
        $variedad->activo = 1;
        $variedad->orden = 218;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 219;
        $variedad->perfume_id = 77;
        $variedad->codigo_catalogo = "8418/4";
        $variedad->activo = 1;
        $variedad->orden = 219;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 220;
        $variedad->perfume_id = 77;
        $variedad->codigo_catalogo = "8417/3";
        $variedad->activo = 1;
        $variedad->orden = 220;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 221;
        $variedad->perfume_id = 77;
        $variedad->codigo_catalogo = "8419/5";
        $variedad->activo = 1;
        $variedad->orden = 221;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 222;
        $variedad->perfume_id = 78;
        $variedad->codigo_catalogo = "1676/9";
        $variedad->activo = 1;
        $variedad->orden = 222;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 223;
        $variedad->perfume_id = 78;
        $variedad->codigo_catalogo = "1674/6";
        $variedad->activo = 1;
        $variedad->orden = 223;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 224;
        $variedad->perfume_id = 78;
        $variedad->codigo_catalogo = "1677/3";
        $variedad->activo = 1;
        $variedad->orden = 224;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 225;
        $variedad->perfume_id = 79;
        $variedad->codigo_catalogo = "5933/4";
        $variedad->activo = 1;
        $variedad->orden = 225;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 226;
        $variedad->perfume_id = 79;
        $variedad->codigo_catalogo = "5934/5";
        $variedad->activo = 1;
        $variedad->orden = 226;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 227;
        $variedad->perfume_id = 79;
        $variedad->codigo_catalogo = "5935/6";
        $variedad->activo = 1;
        $variedad->orden = 227;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 228;
        $variedad->perfume_id = 80;
        $variedad->codigo_catalogo = "5121/4";
        $variedad->activo = 1;
        $variedad->orden = 228;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 229;
        $variedad->perfume_id = 80;
        $variedad->codigo_catalogo = "5120/3";
        $variedad->activo = 1;
        $variedad->orden = 229;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 230;
        $variedad->perfume_id = 80;
        $variedad->codigo_catalogo = "5122/5";
        $variedad->activo = 1;
        $variedad->orden = 230;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 231;
        $variedad->perfume_id = 80;
        $variedad->codigo_catalogo = "5123/6";
        $variedad->activo = 1;
        $variedad->orden = 231;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 232;
        $variedad->perfume_id = 81;
        $variedad->codigo_catalogo = "5963/5";
        $variedad->activo = 1;
        $variedad->orden = 232;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 233;
        $variedad->perfume_id = 81;
        $variedad->codigo_catalogo = "5962/4";
        $variedad->activo = 1;
        $variedad->orden = 233;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 234;
        $variedad->perfume_id = 81;
        $variedad->codigo_catalogo = "5969/4";
        $variedad->activo = 1;
        $variedad->orden = 234;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 235;
        $variedad->perfume_id = 81;
        $variedad->codigo_catalogo = "5964/6";
        $variedad->activo = 1;
        $variedad->orden = 235;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 236;
        $variedad->perfume_id = 81;
        $variedad->codigo_catalogo = "5965/7";
        $variedad->activo = 1;
        $variedad->orden = 236;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 237;
        $variedad->perfume_id = 82;
        $variedad->codigo_catalogo = "2534/3";
        $variedad->activo = 1;
        $variedad->orden = 237;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 238;
        $variedad->perfume_id = 82;
        $variedad->codigo_catalogo = "2533/2";
        $variedad->activo = 1;
        $variedad->orden = 238;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 239;
        $variedad->perfume_id = 82;
        $variedad->codigo_catalogo = "2535/4";
        $variedad->activo = 1;
        $variedad->orden = 239;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 240;
        $variedad->perfume_id = 82;
        $variedad->codigo_catalogo = "2536/5";
        $variedad->activo = 1;
        $variedad->orden = 240;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 241;
        $variedad->perfume_id = 83;
        $variedad->codigo_catalogo = "671/3";
        $variedad->activo = 1;
        $variedad->orden = 241;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 242;
        $variedad->perfume_id = 83;
        $variedad->codigo_catalogo = "670/2";
        $variedad->activo = 1;
        $variedad->orden = 242;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 243;
        $variedad->perfume_id = 83;
        $variedad->codigo_catalogo = "674/6";
        $variedad->activo = 1;
        $variedad->orden = 243;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 244;
        $variedad->perfume_id = 83;
        $variedad->codigo_catalogo = "672/4";
        $variedad->activo = 1;
        $variedad->orden = 244;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 245;
        $variedad->perfume_id = 83;
        $variedad->codigo_catalogo = "673/5";
        $variedad->activo = 1;
        $variedad->orden = 245;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 246;
        $variedad->perfume_id = 84;
        $variedad->codigo_catalogo = "482/8";
        $variedad->activo = 1;
        $variedad->orden = 246;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 247;
        $variedad->perfume_id = 84;
        $variedad->codigo_catalogo = "481/7";
        $variedad->activo = 1;
        $variedad->orden = 247;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 248;
        $variedad->perfume_id = 84;
        $variedad->codigo_catalogo = "484/0";
        $variedad->activo = 0;
        $variedad->orden = 248;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 249;
        $variedad->perfume_id = 84;
        $variedad->codigo_catalogo = "483/9";
        $variedad->activo = 1;
        $variedad->orden = 249;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 250;
        $variedad->perfume_id = 85;
        $variedad->codigo_catalogo = "9526/3";
        $variedad->activo = 1;
        $variedad->orden = 250;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 251;
        $variedad->perfume_id = 85;
        $variedad->codigo_catalogo = "9527/4";
        $variedad->activo = 1;
        $variedad->orden = 251;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 252;
        $variedad->perfume_id = 85;
        $variedad->codigo_catalogo = "9528/5";
        $variedad->activo = 1;
        $variedad->orden = 252;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 253;
        $variedad->perfume_id = 86;
        $variedad->codigo_catalogo = "570/4";
        $variedad->activo = 1;
        $variedad->orden = 253;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 254;
        $variedad->perfume_id = 86;
        $variedad->codigo_catalogo = "571/5";
        $variedad->activo = 1;
        $variedad->orden = 254;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 255;
        $variedad->perfume_id = 86;
        $variedad->codigo_catalogo = "573/7";
        $variedad->activo = 1;
        $variedad->orden = 255;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 256;
        $variedad->perfume_id = 86;
        $variedad->codigo_catalogo = "572/6";
        $variedad->activo = 1;
        $variedad->orden = 256;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 257;
        $variedad->perfume_id = 87;
        $variedad->codigo_catalogo = "1860/5";
        $variedad->activo = 1;
        $variedad->orden = 257;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 258;
        $variedad->perfume_id = 87;
        $variedad->codigo_catalogo = "1861/6";
        $variedad->activo = 1;
        $variedad->orden = 258;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 259;
        $variedad->perfume_id = 87;
        $variedad->codigo_catalogo = "1863/8";
        $variedad->activo = 1;
        $variedad->orden = 259;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 260;
        $variedad->perfume_id = 87;
        $variedad->codigo_catalogo = "1862/7";
        $variedad->activo = 1;
        $variedad->orden = 260;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 261;
        $variedad->perfume_id = 88;
        $variedad->codigo_catalogo = "7201/3";
        $variedad->activo = 1;
        $variedad->orden = 261;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 262;
        $variedad->perfume_id = 88;
        $variedad->codigo_catalogo = "7202/4";
        $variedad->activo = 1;
        $variedad->orden = 262;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 263;
        $variedad->perfume_id = 89;
        $variedad->codigo_catalogo = "981/3";
        $variedad->activo = 1;
        $variedad->orden = 263;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 264;
        $variedad->perfume_id = 89;
        $variedad->codigo_catalogo = "980/2";
        $variedad->activo = 1;
        $variedad->orden = 264;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 265;
        $variedad->perfume_id = 90;
        $variedad->codigo_catalogo = "1031/2";
        $variedad->activo = 0;
        $variedad->orden = 265;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 266;
        $variedad->perfume_id = 90;
        $variedad->codigo_catalogo = "1030/1";
        $variedad->activo = 0;
        $variedad->orden = 266;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 267;
        $variedad->perfume_id = 91;
        $variedad->codigo_catalogo = "9850/1";
        $variedad->activo = 1;
        $variedad->orden = 267;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 268;
        $variedad->perfume_id = 91;
        $variedad->codigo_catalogo = "9851/2";
        $variedad->activo = 1;
        $variedad->orden = 268;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 269;
        $variedad->perfume_id = 92;
        $variedad->codigo_catalogo = "9984/2";
        $variedad->activo = 1;
        $variedad->orden = 269;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 270;
        $variedad->perfume_id = 92;
        $variedad->codigo_catalogo = "9985/3";
        $variedad->activo = 1;
        $variedad->orden = 270;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 271;
        $variedad->perfume_id = 93;
        $variedad->codigo_catalogo = "340/2";
        $variedad->activo = 1;
        $variedad->orden = 271;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 272;
        $variedad->perfume_id = 93;
        $variedad->codigo_catalogo = "341/3";
        $variedad->activo = 1;
        $variedad->orden = 272;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 273;
        $variedad->perfume_id = 94;
        $variedad->codigo_catalogo = "346/4";
        $variedad->activo = 1;
        $variedad->orden = 273;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 274;
        $variedad->perfume_id = 94;
        $variedad->codigo_catalogo = "347/5";
        $variedad->activo = 1;
        $variedad->orden = 274;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 276;
        $variedad->perfume_id = 42;
        $variedad->codigo_catalogo = "1923/7";
        $variedad->activo = 1;
        $variedad->orden = 276;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 277;
        $variedad->perfume_id = 65;
        $variedad->codigo_catalogo = "6785/4";
        $variedad->activo = 0;
        $variedad->orden = 277;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 278;
        $variedad->perfume_id = 67;
        $variedad->codigo_catalogo = "6787/6";
        $variedad->activo = 0;
        $variedad->orden = 278;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 279;
        $variedad->perfume_id = 84;
        $variedad->codigo_catalogo = "6788/7";
        $variedad->activo = 1;
        $variedad->orden = 279;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 280;
        $variedad->perfume_id = 96;
        $variedad->codigo_catalogo = "1684/5";
        $variedad->activo = 0;
        $variedad->orden = 280;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 281;
        $variedad->perfume_id = 97;
        $variedad->codigo_catalogo = "291/3";
        $variedad->activo = 1;
        $variedad->orden = 281;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 282;
        $variedad->perfume_id = 97;
        $variedad->codigo_catalogo = "293/5";
        $variedad->activo = 1;
        $variedad->orden = 282;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 283;
        $variedad->perfume_id = 98;
        $variedad->codigo_catalogo = "8812/5";
        $variedad->activo = 0;
        $variedad->orden = 283;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 284;
        $variedad->perfume_id = 98;
        $variedad->codigo_catalogo = "8804/3";
        $variedad->activo = 0;
        $variedad->orden = 284;
        $variedad->limited = 0;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 285;
        $variedad->perfume_id = 24;
        $variedad->codigo_catalogo = "1520/2";
        $variedad->activo = 1;
        $variedad->orden = "285";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 286;
        $variedad->perfume_id = 28;
        $variedad->codigo_catalogo = "1521/3";
        $variedad->activo = 1;
        $variedad->orden = " 286";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 287;
        $variedad->perfume_id = 34;
        $variedad->codigo_catalogo = "1522/4";
        $variedad->activo = 1;
        $variedad->orden = " 287";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 288;
        $variedad->perfume_id = 32;
        $variedad->codigo_catalogo = "1523/5";
        $variedad->activo = 1;
        $variedad->orden = " 288";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 289;
        $variedad->perfume_id = 22;
        $variedad->codigo_catalogo = "1524/6";
        $variedad->activo = 1;
        $variedad->orden = " 289";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 290;
        $variedad->perfume_id = 39;
        $variedad->codigo_catalogo = "7441/2";
        $variedad->activo = 1;
        $variedad->orden = " 290";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 291;
        $variedad->perfume_id = 40;
        $variedad->codigo_catalogo = "7442/3";
        $variedad->activo = 1;
        $variedad->orden = " 291";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 292;
        $variedad->perfume_id = 46;
        $variedad->codigo_catalogo = "7445/6";
        $variedad->activo = 1;
        $variedad->orden = " 292";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 293;
        $variedad->perfume_id = 41;
        $variedad->codigo_catalogo = "7446/7";
        $variedad->activo = 1;
        $variedad->orden = " 293";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 294;
        $variedad->perfume_id = 81;
        $variedad->codigo_catalogo = "7443/4";
        $variedad->activo = 1;
        $variedad->orden = " 294";
        $variedad->limited = 1;
        $variedad->save();

        $variedad = new Variedad();
        $variedad->id = 295;
        $variedad->perfume_id = 48;
        $variedad->codigo_catalogo = "7447/9";
        $variedad->activo = 1;
        $variedad->orden = " 295";
        $variedad->limited = 1;
        $variedad->save();








    }
}
