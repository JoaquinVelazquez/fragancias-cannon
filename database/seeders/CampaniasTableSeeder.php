<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campania;

class CampaniasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kevin = new Campania;
        $kevin->nombre = "Kevin";
        $kevin->perfume_id = 37;
        $kevin->video_url = "https://www.youtube.com/watch?v=7pFniVpZSQw";
        $kevin->save();

        $code = new Campania;
        $code->nombre = "Colbert Code";
        $code->perfume_id = 48;
        $code->video_url = "";
        $code->save();

        $acqua = new Campania;
        $acqua->nombre = "Acqua Di Colbert";
        $acqua->perfume_id = 46;
        $acqua->video_url = "";
        $acqua->save();

        $crystal = new Campania;
        $crystal->nombre = "Ciel Crytal";
        $crystal->perfume_id = 32;
        $crystal->video_url = "https://www.youtube.com/watch?v=f7Vy5G0ReBE";
        $crystal->save();

        $pibes = new Campania;
        $pibes->nombre = "Pibe's";
        $pibes->perfume_id = 13;
        $pibes->video_url = "https://www.youtube.com/watch?v=LpMcUC_GH7M";
        $pibes->save();

        $noir = new Campania;
        $noir->nombre = "Ciel Noir";
        $noir->perfume_id = 34;
        $noir->video_url = "https://www.youtube.com/watch?v=KxnGPkEml_k";
        $noir->save();



    }
}
