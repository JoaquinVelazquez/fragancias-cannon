<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perfume;

class PerfumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfume = new Perfume();
		$perfume->id = 1;
		$perfume->nombre = "Coqueterias";
		$perfume->fragancia = "Fragancia fresca con matices florales. Azahar y jacinto con un corazón de rosas, lirios y jazmines.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 1;
		$perfume->is_premium = 0;
		$perfume->orden = 1;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 2;
		$perfume->nombre = "Coqueterias Funny";
		$perfume->fragancia = "Notas cremosas de banana, ananá, limón y pera, acompañadas por fresias, jazmín y muguet.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 1;
		$perfume->is_premium = 0;
		$perfume->orden = 2;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 3;
		$perfume->nombre = "Coqueterias Flowers";
		$perfume->fragancia = "Fragancia floral-frutada. Una fantasía cítrica en medio de un jardín secreto de flores.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 1;
		$perfume->is_premium = 0;
		$perfume->orden = 3;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 4;
		$perfume->nombre = "Mujercitas";
		$perfume->fragancia = "Románticas gardenias, rosas, jazmines y lirios, junto a la picardía del ámbar y el musk.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 2;
		$perfume->is_premium = 0;
		$perfume->orden = 4;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 5;
		$perfume->nombre = "Sophie by Mujercitas";
		$perfume->fragancia = "Fresca y chispeante. Fragancia verde floral. Jazmines y rosas. Manzanas, naranja y sutiles notas de almendras y musk.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 2;
		$perfume->is_premium = 0;
		$perfume->orden = 5;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 6;
		$perfume->nombre = "Julie by Mujercitas";
		$perfume->fragancia = "Notas cremosas de banana, ananá, limón y pera, acompañadas por fresias, jazmín y muguet.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 2;
		$perfume->is_premium = 0;
		$perfume->orden = 6;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 7;
		$perfume->nombre = "Mujercitas Love One";
		$perfume->fragancia = "Fragancia floral-especiada. Delicada y vivaz. Huele a frescas violetas, fresias y muguet.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 2;
		$perfume->is_premium = 0;
		$perfume->orden = 7;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 8;
		$perfume->nombre = "Mujercitas Love Two";
		$perfume->fragancia = "Fragancia romántica y chispeante. Delicados geranios, jazmines y melón.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 2;
		$perfume->is_premium = 0;
		$perfume->orden = 8;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 9;
		$perfume->nombre = "Mujercitas Sunny";
		$perfume->fragancia = "Un cóctel de ricas frutas entre flores blancas y notas verdes, brilla con el ámbar y la vainilla.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 2;
		$perfume->is_premium = 0;
		$perfume->orden = 9;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 10;
		$perfume->nombre = "Mujercitas Funny";
		$perfume->fragancia = "Durazno, melón, cassis, violetas y rosas, con copos de azúcar, entre bosques de sándalo.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 2;
		$perfume->is_premium = 0;
		$perfume->orden = 10;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 11;
		$perfume->nombre = "Paco Futbol";
		$perfume->fragancia = "Una fragancia divertida. Bergamota, vetiver y patchouli.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 3;
		$perfume->is_premium = 0;
		$perfume->orden = 11;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 12;
		$perfume->nombre = "Pibes Future Kids";
		$perfume->fragancia = "Una explosión cítrica acompañada de sándalo, hojas de hiedra y roble.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 4;
		$perfume->is_premium = 0;
		$perfume->orden = 12;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 13;
		$perfume->nombre = "Pibe's";
		$perfume->fragancia = "Fragancia cítrica de bergamota, lima y limón, con lavanda y ámbar.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 4;
		$perfume->is_premium = 0;
		$perfume->orden = 13;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 14;
		$perfume->nombre = "Paco";
		$perfume->fragancia = "Chispeantes y divertida. Geranio, sándalo y almizcle.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 3;
		$perfume->is_premium = 0;
		$perfume->orden = 14;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 15;
		$perfume->nombre = "Paco Surf";
		$perfume->fragancia = "Marina, frutada y fresca. Limón y bergamota, maderas, enérgicas notas ozónicas, ámbar y musk.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 3;
		$perfume->is_premium = 0;
		$perfume->orden = 15;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 16;
		$perfume->nombre = "Danielle";
		$perfume->fragancia = "Una combinación sutíl de notras frscas y flores blancas con un toquecito de musk.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 5;
		$perfume->is_premium = 0;
		$perfume->orden = 16;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 17;
		$perfume->nombre = "Jolie Danielle";
		$perfume->fragancia = "Fragancia de delicados componentes. Notas florales blancas de azahares y gardenias, con purísimas lavandas.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 5;
		$perfume->is_premium = 0;
		$perfume->orden = 17;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 18;
		$perfume->nombre = "My Little Danielle";
		$perfume->fragancia = "Delicada fragancia floral frutada. Combinación de petitgrain, flores de azahar y naranaja dulce con suaves toques de vainilla y ámbar.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 5;
		$perfume->is_premium = 0;
		$perfume->orden = 18;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 19;
		$perfume->nombre = "Danielle Girl";
		$perfume->fragancia = "Chispeante mix frutal y floral. Manzana verde, muguet, jazmín, rosa y ámbar.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 5;
		$perfume->is_premium = 0;
		$perfume->orden = 19;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 20;
		$perfume->nombre = "Danielle Boy";
		$perfume->fragancia = "Fragancia cítrica especiada. Limon y bergamota. Cardamomo, jengibre y jazmín. Ámbar y patchouli.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 5;
		$perfume->is_premium = 0;
		$perfume->orden = 20;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 21;
		$perfume->nombre = "Danielle Baby";
		$perfume->fragancia = "Petitgrain, flor de azahar y naranjas. Rosas, geranio y lirio. Sutiles notas de almizcle, ámbar y vainilla.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 5;
		$perfume->is_premium = 0;
		$perfume->orden = 21;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 22;
		$perfume->nombre = "Flower Rose";
		$perfume->fragancia = "Fragancia que atesora lo femenino, a través de rosas, lilas, frutas dulces, sándalo y ámbar.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 6;
		$perfume->is_premium = 0;
		$perfume->orden = 22;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 23;
		$perfume->nombre = "Ciel Love";
		$perfume->fragancia = "Fragancia teen floral frutal. Bergamota, limón y manzana. Jazmín, muguet y violetas. Rosas y azahar, en un mix joven y chispeante con ámbar y musk.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 23;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 24;
		$perfume->nombre = "Ciel";
		$perfume->fragancia = "Fresca transparencia de lilas, jazmines y notas verdes, que armoniza con fresias y flor de lis. Irradia sensualidad a través del musk y patchouli.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 24;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 25;
		$perfume->nombre = "Ciel Paradise";
		$perfume->fragancia = "La presencia del limón en un corazón de jazmín, rosa y lila vibra en cedro, jengibre, patchouli y ámbar.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 25;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 26;
		$perfume->nombre = "Ciel Rose";
		$perfume->fragancia = "Un torbellino floral frutado. Peonías rosadas, granadas, cassis frutos de la pasión y té blanco.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 26;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 27;
		$perfume->nombre = "Ciel D'été";
		$perfume->fragancia = "Evoca la delicada armonía de un jardín en flor, con notas frescas, frutales y amaderadas.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 27;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 28;
		$perfume->nombre = "Ciel Nuit";
		$perfume->fragancia = "Entre notas de lima, durazno y cassis brillan jazmines y muguet en la envolvente luz del sándalo y la vainilla.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 28;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 29;
		$perfume->nombre = "Nuit 1";
		$perfume->fragancia = "Pomelo, pimienta blanca, violeta gardenia, almizcle y sándalo.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 29;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 30;
		$perfume->nombre = "Nuit 2";
		$perfume->fragancia = "Durazno, frutos rojos, rosa, jazmin, patchuli y ambar";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 30;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 31;
		$perfume->nombre = "Nuit 3";
		$perfume->fragancia = "Muguet, Fresia, bergamota, maracuyá, ambar y cedro.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 31;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 32;
		$perfume->nombre = "Ciel Crystal";
		$perfume->fragancia = "Joya transparente. Naranjas dulces y limón de Italia. Notas de azahar, flor de loto, rosas y pétalos de nerolí.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 32;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 33;
		$perfume->nombre = "Ciel D'or";
		$perfume->fragancia = "Sutil armonía de bergamota, pomelo, jazmín, rosa y muguet, con un toque final de sándalo, patchouli y musk.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->is_premium = 0;
		$perfume->orden = 33;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 34;
		$perfume->nombre = "Ciel Noir";
		$perfume->fragancia = "Moderna y romántica. Sensuales acordes de tuberosa, flor de naranjo, magnolia, iris y grosella negra. Frescura en las hojas de violeta y un envolvente final de maderas de sándalo y vainilla.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->orden = 34;
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->is_premium = 0;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 35;
		$perfume->nombre = "Ciel Magic";
		$perfume->fragancia = "Fragancia floriental frutada que evoca un universo magico. Cassis, lima y frutos rojos en una combinacion moderna y joven con rosas, violetas y jazmin. Sutiles notas de ambar, musk y cedro.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 7;
		$perfume->facebook = "https://www.facebook.com/FraganciasCiel/";
		$perfume->orden = 35;
		$perfume->instagram = "https://www.instagram.com/fraganciasciel/";
		$perfume->is_premium = 0;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 36;
		$perfume->nombre = "L'extreme";
		$perfume->fragancia = "Esencias florales de tuberosa y gardenia que se expanden junto al sándalo, ámbar y musk.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 8;
		$perfume->is_premium = 0;
		$perfume->orden = 36;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 37;
		$perfume->nombre = "Kevin";
		$perfume->fragancia = "Sándalo, patchouli y musk. Refinados toques de salvia, nerolí y especias.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 9;
		$perfume->is_premium = 0;
		$perfume->orden = 37;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 38;
		$perfume->nombre = "Kevin Park";
		$perfume->fragancia = "Frescura y vitalidad. Notas verdes y frutadas, chipre, maderas y fougère.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 9;
		$perfume->is_premium = 0;
		$perfume->orden = 38;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 39;
		$perfume->nombre = "Kevin Black";
		$perfume->fragancia = "Fusiona armónicamente bergamota y clavo de olor, muguet y lavanda, vibrando con la intensidad amaderada del cedro, sándalo y patchouli.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 9;
		$perfume->is_premium = 0;
		$perfume->orden = 39;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 40;
		$perfume->nombre = "Kevin Spirit";
		$perfume->fragancia = "Green. Frutada. Fresca. Bergamota de Italia. Cardamomo de la India. Nuez de Molucas. Un viaje de los sentidos.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 9;
		$perfume->is_premium = 0;
		$perfume->orden = 40;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 41;
		$perfume->nombre = "Chester Ice";
		$perfume->fragancia = "Frescura cítrica y de lavanda. Sensualidad en el ámbar, entre notas de musk y nerolí";
		$perfume->linea_id = 3;
		$perfume->marca_id = 10;
		$perfume->is_premium = 0;
		$perfume->orden = 41;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 42;
		$perfume->nombre = "Colbert";
		$perfume->fragancia = "Combina patchouli, tabaco y heno de los Alpes, con nerolí y petitgrain.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 11;
		$perfume->is_premium = 0;
		$perfume->orden = 42;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 43;
		$perfume->nombre = "Pino Colbert";
		$perfume->fragancia = "Rico en maderas, vetiver, lavanda, especias y un toque de patchouli.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 11;
		$perfume->is_premium = 0;
		$perfume->orden = 43;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 44;
		$perfume->nombre = "Colbert Noir";
		$perfume->fragancia = "Apasionado. Definido. Vital. Esencia de sándalo, patchouli y ámbar con toques de especias, hierbas y maderas.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 11;
		$perfume->is_premium = 0;
		$perfume->orden = 44;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 45;
		$perfume->nombre = "Colbert US";
		$perfume->fragancia = "La frescura del imón y naranjo. Especias y maderas, con notas de tabaco y patchouli.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 11;
		$perfume->is_premium = 0;
		$perfume->orden = 45;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 46;
		$perfume->nombre = "Acqua Di Colbert";
		$perfume->fragancia = "Cítricos frutados y maderas nobles. Notas especiadas. Musgo de árbol europeo. Lavanda de la campiña francesa y un toque de patchouli.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 11;
		$perfume->is_premium = 0;
		$perfume->orden = 46;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 47;
		$perfume->nombre = "Colbert Space";
		$perfume->fragancia = "Notas verdes y marinas. Cedro y lavanda, musgos, ambar y musk.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 11;
		$perfume->is_premium = 0;
		$perfume->orden = 47;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 48;
		$perfume->nombre = "Colbert Code";
		$perfume->fragancia = "Fragancia aromática amaderada de moderna frescura y rebeldía para un espíritu joven y dinámico.Lavanda y bergamota. Patchouli, ámbar, vetiver y musk.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 11;
		$perfume->is_premium = 0;
		$perfume->orden = 48;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 49;
		$perfume->nombre = "Crandall";
		$perfume->fragancia = "Fragancia a base de ylang-ylang, patchouli, sándalo y vetiver. Toques de vainilla, musgo y musk.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 12;
		$perfume->is_premium = 0;
		$perfume->orden = 49;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 50;
		$perfume->nombre = "Bross London Warrior";
		$perfume->fragancia = "Frutada - fresca. Limón, bergamota, ozono, maderas y musk.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 13;
		$perfume->is_premium = 1;
		$perfume->orden = 50;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 51;
		$perfume->nombre = "Bross London Blue";
		$perfume->fragancia = "Oriental - frutada. Naranja amarga, cassis, vetiver, patchouli y maderas.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 13;
		$perfume->is_premium = 1;
		$perfume->orden = 51;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 52;
		$perfume->nombre = "Bross London Classic";
		$perfume->fragancia = "Marina amaderada. Nuez moscada, ylang-ylang, cuero y ámbar";
		$perfume->linea_id = 3;
		$perfume->marca_id = 13;
		$perfume->is_premium = 1;
		$perfume->orden = 52;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 53;
		$perfume->nombre = "Bross London Combo";
		$perfume->fragancia = "WARRIOR: Frutada - fresca. Limón, bergamota, ozono, maderas y musk. BLUE: Oriental - frutada. Naranja amarga, cassis, vetiver, patchouli y maderas. CLASSIC: Marina amaderada. Nuez moscada, ylang-ylang, cuero y ámbar.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 13;
		$perfume->is_premium = 1;
		$perfume->orden = 53;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 54;
		$perfume->nombre = "Alliance by Carlos Benaim";
		$perfume->fragancia = "Creado por el gran perfumista Carlos Benaim. Bergamota de Italia, nuez moscada, cardamomo, patchouli, ámbar, vetiver y musgo de roble.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 14;
		$perfume->is_premium = 0;
		$perfume->orden = 54;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 55;
		$perfume->nombre = "Alliance épicée by Salomon Sutton";
		$perfume->fragancia = "Combinación de pimientas, pomelo, bergamota y lima de Persia. Cardamomo y artemisia, Vetiver, cedro y patchouli.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 14;
		$perfume->is_premium = 0;
		$perfume->orden = 55;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 56;
		$perfume->nombre = "Alliance Tobaco Vanille";
		$perfume->fragancia = "Oriental especiada. Canela, jengibre y anís. Geranio, lavanda y un toque de pimienta negra. Hojas de tabaco, vainilla, cedro y guaiac wood.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 14;
		$perfume->is_premium = 0;
		$perfume->orden = 56;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 57;
		$perfume->nombre = "Prüne I";
		$perfume->fragancia = "Abedul, pomelo y ozono. Gardenia, muguet, peonia y sampaguita. Ámbar, maderas y musk.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 15;
		$perfume->is_premium = 1;
		$perfume->orden = 57;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 58;
		$perfume->nombre = "Prüne II";
		$perfume->fragancia = "Notas de limón, menta y pimienta. Jazmín, muguet, orquídea y lirio de Florencia. Sándalo y musk.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 15;
		$perfume->is_premium = 1;
		$perfume->orden = 58;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 59;
		$perfume->nombre = "Prüne III";
		$perfume->fragancia = "Fresias, jacinto y mandarina. Muguet, orquídea, rosa y sampaguita. Ámbar y lirio de Florencia.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 15;
		$perfume->is_premium = 1;
		$perfume->orden = 59;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 60;
		$perfume->nombre = "Prüne IV";
		$perfume->fragancia = "Bergamota, ananá y durazno. Vainilla y sándalo Rosa de Damasco y violeta.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 15;
		$perfume->is_premium = 1;
		$perfume->orden = 60;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 61;
		$perfume->nombre = "Prüne Icon";
		$perfume->fragancia = "Fragancia floral frutada. Bergamota, ozono y lemongrass. Narcisos, magnolias y flor de naranjo. Ámbar, musk y sándalo.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 15;
		$perfume->is_premium = 1;
		$perfume->orden = 61;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 62;
		$perfume->nombre = "Prüne Moï";
		$perfume->fragancia = "Misterio oriental. Pasión floral. Cassis, patchouli, vainilla y jazmín.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 15;
		$perfume->is_premium = 1;
		$perfume->orden = 62;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 63;
		$perfume->nombre = "Paula Cahen D'anvers Paula";
		$perfume->fragancia = "Pura vitalidad en notas de bergamota, limón y artemisa. Perfecto acorde con ámbar, cedro y sándalo y un toque exótico de semillas de Tonka.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 63;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 64;
		$perfume->nombre = "Paula Cahen D'anvers Amor ";
		$perfume->fragancia = "Irradia el encanto natural de fresias y jazmines. Su corazón de muguet y violetas vibra en el eco del ámbar.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 64;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 65;
		$perfume->nombre = "Paula Cahen D'anvers Luz ";
		$perfume->fragancia = "Frescas notas de mandarina, naranja y lima en contrapunto con jazmín, frutilla, rosa y violeta, armonizan con patchouli, almizcle y cedro.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 65;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 66;
		$perfume->nombre = "Paula Cahen D'anvers Alma ";
		$perfume->fragancia = "Sutil presencia. Durazno y bergamota. Orquídea, tuberosa, sándalo, vainilla y ámbar.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 66;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 67;
		$perfume->nombre = "Paula Cahen D'anvers Luna ";
		$perfume->fragancia = "Delicadas flores de osmanthus y azahares, combinadas con ámbar, almizcles blancos y maderas preciosas.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 67;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 68;
		$perfume->nombre = "Paula Cahen D'anvers Sueños ";
		$perfume->fragancia = "Violeta,nerolí y muguet. Cítricos, cedro, almizcle y ámbar.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 68;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 69;
		$perfume->nombre = "Paula Cahen D'anvers Flores ";
		$perfume->fragancia = "Jazmín y gardenia. Pimienta rosa, madreselva y sándalo.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 69;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 70;
		$perfume->nombre = "Paula Cahen D'anvers Bosque";
		$perfume->fragancia = "Citrón, pomelo rosado, uvas blanca, jazmín y ámbar.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 70;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 71;
		$perfume->nombre = "Paula Cahen D'anvers En el Bosque...";
		$perfume->fragancia = "Danza encantada de frutos, flores, vainilla.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 71;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 72;
		$perfume->nombre = "Paula Cahen D'anvers En... Sueños";
		$perfume->fragancia = "Juegan fragantes naranjas entre azahares y geranios al amparo del cálido cedro.";
		$perfume->linea_id = 1;
		$perfume->marca_id = 16;
		$perfume->is_premium = 1;
		$perfume->orden = 72;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 73;
		$perfume->nombre = "CaroCuore";
		$perfume->fragancia = "La intensidad de fresias, peonías y rosas, junto con maderas de sándalo y cedro revelan un final envolvente y seductor.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 17;
		$perfume->is_premium = 1;
		$perfume->orden = 73;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 74;
		$perfume->nombre = "CaroCuore Fiore";
		$perfume->fragancia = "Despertar de manzana y ozono. Corazón de rosas y jazmines, en sensual contrapunto con patchouli y vainilla.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 17;
		$perfume->is_premium = 1;
		$perfume->orden = 74;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 75;
		$perfume->nombre = "Gino Bogani Pour Femme";
		$perfume->fragancia = "Jazmín absoluto, tuberosa, rosas de Alejandría, flores de azahar y vetiver.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 18;
		$perfume->is_premium = 1;
		$perfume->orden = 75;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 76;
		$perfume->nombre = "Gino Bogani Chic to Cheek!";
		$perfume->fragancia = "Juego de notas floral frutales. Jazmín, rosa y jacinto. Durazno, manzana y membrillo.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 18;
		$perfume->is_premium = 1;
		$perfume->orden = 76;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 77;
		$perfume->nombre = "Gino Bogani Tout Noir ";
		$perfume->fragancia = "Misteriosa fragancia floral. Intensa belleza en una sofisticada combinación de jazmines, rosas, muguet, bergamota y flores de naranjo. Ambar, sándalo y almizcle, revelan un final envolvente.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 18;
		$perfume->is_premium = 1;
		$perfume->orden = 77;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 78;
		$perfume->nombre = "Gino Bogani Pour Homme";
		$perfume->fragancia = "Un audaz acorde amaderado con pimienta rosada, bergamota, geranio y nuez moscada se despliega en cedro, patchouli y bayas de Tonka.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 18;
		$perfume->is_premium = 1;
		$perfume->orden = 78;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 79;
		$perfume->nombre = "Gino Bogani Pour Homme Tout Bleu";
		$perfume->fragancia = "Fragancia oriental fougère. Sofisticada y magnetica seducción. Geranio de Egipto y lavanda. Matices de bergamota y pomelo, con un envolvente final de cedro, musk, patchouli y sándalo.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 18;
		$perfume->is_premium = 1;
		$perfume->orden = 79;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 80;
		$perfume->nombre = "Kevin Metal";
		$perfume->fragancia = "Fragancia con personalidad vibrante y auténtica. Pomelo, bergamota y lavanda explotan con pimienta negra, salvia y nuez moscada. Ámbar, patchouli y vetiver, revelan un final fuerte y seductor.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 9;
		$perfume->is_premium = 0;
		$perfume->orden = 80;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 81;
		$perfume->nombre = "Kevin Absolute";
		$perfume->fragancia = "Audaz equilibrio. Pomelo y canela. Menta y rosa. Maderas, ámbar, patchouli y cuero.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 9;
		$perfume->is_premium = 0;
		$perfume->orden = 81;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 82;
		$perfume->nombre = "Kevin Platinum";
		$perfume->fragancia = "Fresca, verde, frutada. Pomelo y bergamota. Lavanda y geranio. Maderas de cedro, musk y patchouli.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 9;
		$perfume->is_premium = 0;
		$perfume->orden = 82;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 83;
		$perfume->nombre = "Kevin Freedom";
		$perfume->fragancia = "Fresca, verde, frutada. Pomelo y bergamota. Lavanda y geranio. Maderas de cedro, musk y patchouli.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 9;
		$perfume->is_premium = 0;
		$perfume->orden = 83;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 84;
		$perfume->nombre = "Kevin Femme";
		$perfume->fragancia = "Armonía floriental frutada. Violeta, gardenia y flor de azahar. Maderas de cedro, vetiver y vainilla, juegan con la frescura de los cítricos, cassis, frambuesa y ciruela.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 9;
		$perfume->is_premium = 0;
		$perfume->orden = 84;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 85;
		$perfume->nombre = "La Dolfina Stud";
		$perfume->fragancia = "Fragancia verde frutada. Lima y bergamota. Lavanda, pimienta y geranio. Vetiver y sándalo.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 19;
		$perfume->is_premium = 1;
		$perfume->orden = 85;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 86;
		$perfume->nombre = "Paloma Herrera";
		$perfume->fragancia = "Sutil sensualidad y gracia en una fragancia floriental frutada. Rosas, azahares, violetas y jazmines danzan con casís, pomelo, patchouli, cedro y sándalo.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 20;
		$perfume->is_premium = 1;
		$perfume->orden = 86;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 87;
		$perfume->nombre = "Paloma Herrera Passion";
		$perfume->fragancia = "Apasionada y única. Fragancia floral frutada. Lima, bergamota y durazno, en sofisticada armonía junto a rosas, jazmines y tuberosa. Final de sándalo y vainilla.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 20;
		$perfume->is_premium = 1;
		$perfume->orden = 87;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 88;
		$perfume->nombre = "Ana by Analia Maiorana";
		$perfume->fragancia = "Fragancia oriental frutada. Hojas verdes, cassis y ananá, junto con rosas y jazmines despliegan un final envolvente y sensual, con sutiles notas de vainilla y patchouli.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 21;
		$perfume->is_premium = 1;
		$perfume->orden = 88;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 89;
		$perfume->nombre = "Garçon García Garçon";
		$perfume->fragancia = "Fragancia elegante y vibrante. Una equilibrada combinación de cítricos, jengibre, nerolí, pimienta y cedro. Vetiver, cuero y ámbar le dan un final envolvente.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 22;
		$perfume->is_premium = 1;
		$perfume->orden = 89;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 90;
		$perfume->nombre = "Garçon García Jour";
		$perfume->fragancia = "Fragancia de refinada frescura especiada. Cítricos, lavanda y geranio. Núez, ámbar, vetiver y un final acentuado por maderas de cedro y sándalo.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 22;
		$perfume->is_premium = 1;
		$perfume->orden = 90;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 91;
		$perfume->nombre = "Akiabara Black Neroli";
		$perfume->fragancia = "Fragancia de espíritu fresco y floral. Suaves tintes de nerolí, hojas de violeta y verbena, flor de naranjo, iris y jazmín. Sutiles notas de maderas, ámbar y almizcle.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 23;
		$perfume->is_premium = 1;
		$perfume->orden = 91;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 92;
		$perfume->nombre = "Akiabara Water Lily";
		$perfume->fragancia = "Fragancia de armonía floral frutada. Rosas y violetas, frambuesas, flor de manzano y peras. Un final de sutiles notas de cedro y almizcle.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 23;
		$perfume->is_premium = 1;
		$perfume->orden = 92;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 93;
		$perfume->nombre = "Alvear Eau De Parfum Homme";
		$perfume->fragancia = "Fresca elegancia de acordes verdes y amaderados. Lima, pomelo, naranja y notas ozónicas. Lavanda, muguet y violetas. Cedro, patchouli, sándalo y vetiver.";
		$perfume->linea_id = 3;
		$perfume->marca_id = 24;
		$perfume->is_premium = 1;
		$perfume->orden = 93;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 94;
		$perfume->nombre = "Alvear Eau De Parfum Femme";
		$perfume->fragancia = "Sofisticada fragancia oriental. Mandarina y bergamota. Hojas de violeta, magnolia, iris y rosas de Turquía. Patchouli y ámbar en un final envolvente.";
		$perfume->linea_id = 2;
		$perfume->marca_id = 24;
		$perfume->is_premium = 1;
		$perfume->orden = 94;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 96;
		$perfume->nombre = "La Dolfina";
		$perfume->fragancia = "-";
		$perfume->linea_id = 3;
		$perfume->marca_id = 19;
		$perfume->is_premium = 1;
		$perfume->orden = 96;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 97;
		$perfume->nombre = "Para Ti";
		$perfume->fragancia = "-";
		$perfume->linea_id = 2;
		$perfume->marca_id = 26;
		$perfume->is_premium = 1;
		$perfume->orden = 97;
		$perfume->save();

		$perfume = new Perfume();
		$perfume->id = 98;
		$perfume->nombre = "Cannon Musk";
		$perfume->fragancia = "-";
		$perfume->linea_id = 3;
		$perfume->marca_id = 25;
		$perfume->is_premium = 0;
		$perfume->orden = 98;
		$perfume->save();



    }
}
