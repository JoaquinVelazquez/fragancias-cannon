<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PuntoDeVenta;

class PuntosDeVentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "HIPOLITO IRIGOYEN 13305";
		$punto->localidad = "ADROGUE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MICKEY";
		$punto->direccion = "ESTEBAN DE ADROGUE 1297";
		$punto->localidad = "ADROGUE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142146092";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "AV INDEPENDENCIA 111";
		$punto->localidad = "ALEJANDRO KORN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541139386991";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX MITRE";
		$punto->direccion = "MITRE 1973";
		$punto->localidad = "AVELLANEDA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142043636";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX AVELLANEDA";
		$punto->direccion = "HIPOLITO IRIGOYEN 386";
		$punto->localidad = "AVELLANEDA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142220810";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "AV MITRE 844";
		$punto->localidad = "AVELLANEDA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142014817";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "BARTOLOME MITRE 844";
		$punto->localidad = "AVELLANEDA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142014817";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "HIPOLITO IRIGOYEN 261 (SUC CARREFOUR)";
		$punto->localidad = "AVELLANEDA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541151647266";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " AV. GENERAL GÜEMES 897";
		$punto->localidad = "AVELLANEDA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3407";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MICKEY";
		$punto->direccion = "AV MITRE 933";
		$punto->localidad = "AVELLLANEDA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142299687";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SASMA";
		$punto->direccion = "EIVADAVIA 616";
		$punto->localidad = "AZUL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2281-431436";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ISIDORA";
		$punto->direccion = "SAN MARTIN 578";
		$punto->localidad = "AZUL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2281-428030";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "HI2";
		$punto->direccion = "DONADO 78";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 452-4925";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "HI2";
		$punto->direccion = "BELGRANO 75";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 452-4925";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "HI2";
		$punto->direccion = "OHIGGINS 160";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 452-4925";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "HI2";
		$punto->direccion = "ESTOMBA 161";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 452-4925";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "HI2";
		$punto->direccion = "ALSINA 230";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 452-4925";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LA PANALERA";
		$punto->direccion = "CHICLANA Y BRANDSEN";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 454-4534";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BOTICA DEL PEINADOR";
		$punto->direccion = "SAN MARTIN 223";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291-455-8233";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BOTICA DEL PEINADOR";
		$punto->direccion = "ESTOMBA 219";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291-455-8233";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BOTICA DEL PEINADOR";
		$punto->direccion = "OHIGINS 75";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291-455-8233";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BOTICA DEL PEINADOR";
		$punto->direccion = "CHICLANA 163";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291-455-8233";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BOTICA DEL PEINADOR";
		$punto->direccion = "ALSINA 364";
		$punto->localidad = "BAHIA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291-455-8233";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "O HIGGINS 51";
		$punto->localidad = "BAHÍA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 413 2508";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "ALSINA 161";
		$punto->localidad = "BAHÍA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 413 2510";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "BAHÍA BLANCA PLAZA SHOPPING";
		$punto->localidad = "BAHÍA BLANCA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 413 2537";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "ALSINA 214";
		$punto->localidad = "BANFIELD";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142015119";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "HIPOLITO IRIGOYEN 7301";
		$punto->localidad = "BANFIELD";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4366";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "MARIANO CASTEX 785";
		$punto->localidad = "BANFIELD";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MICKEY";
		$punto->direccion = "MAIPU 361";
		$punto->localidad = "BANFIELD";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142429382";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MICKEY";
		$punto->direccion = "MAIPU 176";
		$punto->localidad = "BANFIELD";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142488097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "9 DEJULIO 102";
		$punto->localidad = "BERNAL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142521513";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "AV ALSINA 998";
		$punto->localidad = "BURZACO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142990104";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "ADOLFO ALSINA 649";
		$punto->localidad = "BURZACO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142993234";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "ROCA 849";
		$punto->localidad = "BURZACO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "AV ESPORA 2897";
		$punto->localidad = "BURZACO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "SARGENTO CABRAL 1953";
		$punto->localidad = "CANNING";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541139282676";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MICKEY";
		$punto->direccion = "AV CASTEX 1257 LOCAL 126 - PASEO PLAZA CTRAL";
		$punto->localidad = "CANNING";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1120699319";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "ALEM 966";
		$punto->localidad = "CAÑUELAS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541122412235";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "AV LIBERTAD 1630";
		$punto->localidad = "CAÑUELAS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541139341493";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "BASILE";
		$punto->direccion = "M. CRESPO 104";
		$punto->localidad = "CARMEN DE PATAGONES";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2920-464003";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ROSSI";
		$punto->direccion = "GDOR. INOCENCIO ARIAS 2409";
		$punto->localidad = "CASTELAR";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4627-4000";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SANTA ROSA";
		$punto->direccion = "CNEL. MACHADO 3575";
		$punto->localidad = "CASTELAR";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4624-5929";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "REINA 2";
		$punto->direccion = "ARENALES 190";
		$punto->localidad = "CHASCOMUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2241-537702";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LA PANALERA";
		$punto->direccion = "RIVAS 40";
		$punto->localidad = "CORONEL SUAREZ";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 454-4534";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "EDEN";
		$punto->direccion = "LAMADRID 1300";
		$punto->localidad = "CORONEL SUAREZ";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2926-493695";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AROMAS";
		$punto->direccion = "AVDA, DE MAYO 217";
		$punto->localidad = "DERQUI";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2322540930";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AROMAS";
		$punto->direccion = "EVA PERON 805";
		$punto->localidad = "DERQUI";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2322540930";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AROMAS";
		$punto->direccion = "EVA PERON ESQ. PACHECO";
		$punto->localidad = "DERQUI";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2322540930";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AROMAS";
		$punto->direccion = "PERON 633";
		$punto->localidad = "DERQUI";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2322540930";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = "EUGENIA TAPIA DE CRUZ 939 ";
		$punto->localidad = "ESCOBAR";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3418";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "AVELLANEDA 74";
		$punto->localidad = "EZEIZA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541136403246";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "BERNARDO DE MONTEAGUADO 3299";
		$punto->localidad = "FLORENCIO VARELA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1143555319";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SHOPPING CATAN";
		$punto->direccion = "J M ROSAS 14446";
		$punto->localidad = "G. CATAN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1144847669";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX GERLI";
		$punto->direccion = "LACARRA 1556";
		$punto->localidad = "GERLI, LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142653030";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX BUSTAMANTE";
		$punto->direccion = "HIPOLITO IRIGOYEN 2331";
		$punto->localidad = "GERLI, LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142088877";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " JOSÉ MARÍA MORENO 555";
		$punto->localidad = "GONZALEZ CATAN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3408";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ROCCO";
		$punto->direccion = "JAURECHE 503";
		$punto->localidad = "GUERNICA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0222 4470389";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "FRANCO";
		$punto->direccion = "EVA PERON 515";
		$punto->localidad = "GUERNICA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0222 4490365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "HAEDO";
		$punto->direccion = "CASEROS 2";
		$punto->localidad = "HAEDO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4460-1444";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MIRIAM";
		$punto->direccion = "RIVADAVIA 16089";
		$punto->localidad = "HAEDO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1147964788";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ITUZAINGO";
		$punto->direccion = "LAS HERAS 381";
		$punto->localidad = "ITUZAINGO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4624-4774";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "EYC";
		$punto->direccion = "SOLER 158";
		$punto->localidad = "ITUZAINGO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4623-0882";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "EYC";
		$punto->direccion = "ZUFRIATEGUI 874";
		$punto->localidad = "ITUZAINGO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4458-5020";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PERFUPAZ";
		$punto->direccion = "JOSE C.PAZ 1783";
		$punto->localidad = "JOSE C PAZ";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "02320-441177";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. HIPOLITO YRIGOYEN 1810";
		$punto->localidad = "JOSE C PAZ";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0232-043-1115";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " JUAN PABLO II 5121";
		$punto->localidad = "JOSE C PAZ";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3409";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "BYNNON 3180";
		$punto->localidad = "JOSE MARMOL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541136477812";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "GONZALO";
		$punto->direccion = "BYNNON 2486";
		$punto->localidad = "JOSE MARMOL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142147124";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " AV. ARIAS N°1 ";
		$punto->localidad = "JUNIN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3419";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "CALLE 12 N º 1232";
		$punto->localidad = "LA PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "08004447373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "CALLE 47 Nº 620";
		$punto->localidad = "LA PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0221 4825453";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "CALLE 8 N758";
		$punto->localidad = "LA PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0221-5916741";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " CALLE 47 NRO. 427 Y DIAGONAL 80";
		$punto->localidad = "LA PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3411";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LA PLAZA CENTRAL";
		$punto->direccion = "LURO 5821";
		$punto->localidad = "LAFERRERE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1145266616";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SOBERANIA";
		$punto->direccion = "SOB NACIONAL 3169";
		$punto->localidad = "LAFERRERE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1146269857";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DECIME LINDA";
		$punto->direccion = "LURO 6058";
		$punto->localidad = "LAFERRERE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1144579385";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DECIME LINDA";
		$punto->direccion = "LOPEZ MAY 3174";
		$punto->localidad = "LAFERRERE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1144579385";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = "COMODORO PY 3102 ";
		$punto->localidad = "LAFERRERE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3417";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX LANUS";
		$punto->direccion = "HIPOLITO IRIGOYEN 4414";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1143579050";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX MODERNA";
		$punto->direccion = "9 DE JULIO 13562";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142417769";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX DELIA";
		$punto->direccion = "AV SAN MARTIN 1934";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142251170";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "HIPOLITO IRIGOYEN 4581";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142404340";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "AV SAN MARTIN 3300";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142477074";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "25 DE MAYO 398";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142415261";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "AV SAN MARTIN 3737";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142627310";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "HIPOLITO IRIGOYEN 3765";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142478262";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "CNEL WARNES 3861";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1165378253";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "AV SAN MARTIN 4151";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142761334";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AROMA SHOP";
		$punto->direccion = "HIPOLITO IRIGOYEN 4549";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "112406375";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV 9 DE JULIO 1229";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142472006";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV 9 DE JULIO 1150";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142415147";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "HIPOLITO IRIGOYEN 4475";
		$punto->localidad = "LANUS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142478714";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "JAZMIN";
		$punto->direccion = "PEREYRA 1338";
		$punto->localidad = "LAPRIDA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2281-659350";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DI NUVILA 2";
		$punto->direccion = "SAN MARTIN 572";
		$punto->localidad = "LAS FLORES";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2244-443480";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LELOIR";
		$punto->direccion = "AV. PRESIDENTE PERON 8505";
		$punto->localidad = "LELOIR";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4621-8818";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " 1 DE MAYO 1173";
		$punto->localidad = "LOMA HERMOSA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3423";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX GORRITI";
		$punto->direccion = "HIPOLITO IRIGOYEN 9125";
		$punto->localidad = "LOMAS DE ZAMORA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142445129";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "HIPOLITO IRIGOYEN 8101";
		$punto->localidad = "LOMAS DE ZAMORA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " FRANCISCO NARCISO DE LAPRIDA 382";
		$punto->localidad = "LOMAS DE ZAMORA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3421";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "AV DE LA AVIACION 991";
		$punto->localidad = "LONGCHAMPS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541139386991";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ROCCO";
		$punto->direccion = "CHIEZZA 722";
		$punto->localidad = "LONGCHAMPS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1120839472";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SERGIO";
		$punto->direccion = "SIMON BOLIVAR 1314";
		$punto->localidad = "LONGCHAMPS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541153355711";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SERGIO";
		$punto->direccion = "OVIDIO LAGOS 819";
		$punto->localidad = "LONGCHAMPS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541153355711";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "AV BOULEVARD BUENOS AIRES 1024";
		$punto->localidad = "LUIS GUILLON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541170345312";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "NANEL";
		$punto->direccion = "LAVALLE 385";
		$punto->localidad = "LUJAN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "02323-430250";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "NANEL";
		$punto->direccion = "SAN MARTIN 681";
		$punto->localidad = "LUJAN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "02323-430251";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOLANGE";
		$punto->direccion = "RIVADAVIA 1048";
		$punto->localidad = "LUJAN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "02323-436111";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOLANGE";
		$punto->direccion = "GRAL.PAZ 796 Y 25 DE MAYO";
		$punto->localidad = "LUJAN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "02323-423855 ";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CANTA";
		$punto->direccion = "ALMAFUERTE 325";
		$punto->localidad = "LUZUARIAGA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1169718750";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PIZZOLO";
		$punto->direccion = "AV 39 #3658";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-804932";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PORTOLURO";
		$punto->direccion = "AV LURO 5802";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2236-810768";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PORTOLURO";
		$punto->direccion = "12 DE OTUBRE 3499";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2236-810768";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PORTOLURO";
		$punto->direccion = "AV PERALTA RAMOS 422";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2236-810768";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PORTOLURO";
		$punto->direccion = "12 DE OCTUBRE 3499";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2236-810768";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PORTOLURO";
		$punto->direccion = "12 DE OCTUBRE 3185";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2236-810768";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LINDAS";
		$punto->direccion = "SAN MARTIN 2672";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-951441";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LINDAS";
		$punto->direccion = "STGO DEL ESTERO 1836";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-951441";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LINDAS";
		$punto->direccion = "CATAMARCA 1825";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-951441";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LINDAS";
		$punto->direccion = "A LURO 3960";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-951441";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LINDAS";
		$punto->direccion = "GUEMES 2738";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-951441";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CASA RICART";
		$punto->direccion = "BOLIVAR 3038";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-949941";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CASA RICART";
		$punto->direccion = "RIADAVIA 2410";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-949941";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CASA RICART";
		$punto->direccion = "AV LURO 3146";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-949941";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CASA RICART";
		$punto->direccion = "GUEMES 3058";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-949941";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CASA RICART";
		$punto->direccion = "SAN JUAN ESQ AV LURO";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-949941";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TIENDA LOS GALLEGOS";
		$punto->direccion = "CATAMARCA ESQ BELGRANO";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-996900";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CASA JULIANA";
		$punto->direccion = "SANTA FE 1644";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-789369";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CASA JULIANA";
		$punto->direccion = "AV ARTURO ALIO 2150";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-789369";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AROHA";
		$punto->direccion = "BRONZINI 960";
		$punto->localidad = "MAR DEL PLATA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2234-731959";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "FALABELLA";
		$punto->direccion = "PARANA 3745 UNINCENTER";
		$punto->localidad = "MARTINEZ";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "ALVEAR 124";
		$punto->localidad = "MARTINEZ";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4792-1666";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DE LA ESTACION";
		$punto->direccion = "AV. DEL LIBERTADOR 786";
		$punto->localidad = "MERLO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0220-482-2360";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FUNES";
		$punto->direccion = "AV. DEL LIBERTADOR 383";
		$punto->localidad = "MERLO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0220-485-1597";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. DEL LIBERTADOR 346";
		$punto->localidad = "MERLO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0220-485-6417";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. DEL LIBERTADOR 735";
		$punto->localidad = "MERLO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0220-485-9505";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "VELVET";
		$punto->direccion = "AV. DEL LIBERTADOR 735";
		$punto->localidad = "MERLO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0220-485-9505";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " PTE. JUAN D. PERON 25670 ";
		$punto->localidad = "MERLO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3412";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "ALVAREZ CONDARCO 1586";
		$punto->localidad = "MONTE CHINGOLO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142301329";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "GRAL RODRIGUEZ 129";
		$punto->localidad = "MONTE GRANDE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541139149809";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "MALVINAS 450";
		$punto->localidad = "MONTE GRANDE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541161435654";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "BOULEVARD BUENOS AIRES 179";
		$punto->localidad = "MONTE GRANDE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "ALEM 329";
		$punto->localidad = "MONTE GRANDE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142909899";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "ALEM 121";
		$punto->localidad = "MONTE GRANDE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142909579";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "AV GAONA Y GRAHAM BELL";
		$punto->localidad = "MORENO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541131662169";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "CENTRAL MORON";
		$punto->direccion = "Av. RIVADAVIA 18161";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4483-4343";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "CRAVENA";
		$punto->direccion = "AV. RIVADAVIA 18199";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4483-4333/4747";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "HALPERN";
		$punto->direccion = "CORDOBA 303";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4629-9247";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "MODERNA";
		$punto->direccion = "25 DE MAYO 139";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4629-8598";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "MAREQUE";
		$punto->direccion = "ALMIRANTE GUILLERMO BROWN 701";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4629-7259";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FRASCINO";
		$punto->direccion = "BUENOS AIRES 559";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4627-5754";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN RAFAEL";
		$punto->direccion = "INDEPENDENCIA 165";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4629-2149";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MIRIAM";
		$punto->direccion = "ALTE BROWN 816";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1147964788";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MIRIAM";
		$punto->direccion = "BELGRANO 157";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1147964788";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "ALTE. BROWN 761";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4627-6879";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "BELGRANO 165";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4627-8925";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "9 DE JULIO 291";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4489-5304";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " RIVADAVIA 18302";
		$punto->localidad = "MORON";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3401";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " AV. VÉLEZ SARFIELD 4564/70 ";
		$punto->localidad = "MUNRO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3413";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MELARI";
		$punto->direccion = "AV 59 #2881";
		$punto->localidad = "NECOCHEA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2262-522438";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BONITAS";
		$punto->direccion = "CALLE 6 #4176";
		$punto->localidad = "NECOCHEA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2262-525695";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "VEREA 2";
		$punto->direccion = "RIVADABIA 3051";
		$punto->localidad = "OLAVARRIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2284-446055";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PERFUMERIA JAZMIN";
		$punto->direccion = "SAN MARTIN 6275";
		$punto->localidad = "OLAVARRIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2284_429676";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LA CASA DEL PEINADOR";
		$punto->direccion = "NECOCHEA 3265";
		$punto->localidad = "OLAVARRIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2284-559255";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " HIPÓLITO YRIGOYEN 740 (EX RUTA 197)";
		$punto->localidad = "PACHECO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3404";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "NOGUERA";
		$punto->direccion = "NOGUERA 23";
		$punto->localidad = "PADUA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0220-482-9461";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AROMAS";
		$punto->direccion = "AV TOMAS MARQUEZ 1354-58";
		$punto->localidad = "PILAR";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2322540930";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " SAN MARTIN 599";
		$punto->localidad = "PILAR";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3420";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "HI2";
		$punto->direccion = "HIRIGOYEN 157";
		$punto->localidad = "PUNTA ALTA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 452-4925";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LA MAJA DOLORES";
		$punto->direccion = "BDO HIRIGOYEN 161";
		$punto->localidad = "PUNTA ALTA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2932-432345";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "AV RIVADAVIA 300 ESQ ALVEAR";
		$punto->localidad = "QUILMES";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142530019";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " RIVADAVIA 91 ESQ. SAN MARTÍN";
		$punto->localidad = "QUILMES";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3400";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "ALTAMIRA 1999";
		$punto->localidad = "RAFAEL CALZADA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PARA TI";
		$punto->direccion = "AV. RIVADAVIA 14002";
		$punto->localidad = "RAMOS MEJIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4658-1760/0276";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "MARTINOIA";
		$punto->direccion = "AV. DE MAYO 899";
		$punto->localidad = "RAMOS MEJIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4658-4909";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "AVENIDA";
		$punto->direccion = "AV. DE MAYO 427";
		$punto->localidad = "RAMOS MEJIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MIRIAM";
		$punto->direccion = "AV MAYO 55";
		$punto->localidad = "RAMOS MEJIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1147964788";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MIRIAM";
		$punto->direccion = "BELGRANO 16";
		$punto->localidad = "RAMOS MEJIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1147964788";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MIRIAM";
		$punto->direccion = "RIVADAVIA 14042";
		$punto->localidad = "RAMOS MEJIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1147964788";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ARIES";
		$punto->direccion = "AV MAYO 289";
		$punto->localidad = "RAMOS MEJIA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1161056675";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX ESCALADA";
		$punto->direccion = "HIPOLITO IRIGOYEN 6401";
		$punto->localidad = "REMEDIOS DE ESCALADA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142420090";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "HIPOLITO IRIGOYEN 6201";
		$punto->localidad = "REMEDIOS DE ESCALADA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142429181";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "MARCO AVELLANEDA 2502";
		$punto->localidad = "REMEDIOS DE ESCALADA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142764562";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "BELGRANO 327";
		$punto->localidad = "SAN ISIDRO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4747-4367";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "AV EVA PERON 3305";
		$punto->localidad = "SAN JOSE, TEMPERLEY";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "NUEVO MILENIO";
		$punto->direccion = "ARIETA 3552";
		$punto->localidad = "SAN JUSTO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "46512424";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ARIETA";
		$punto->direccion = "ARIETA 3230";
		$punto->localidad = "SAN JUSTO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1144847669";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ROMANO";
		$punto->direccion = "AV. PRES. Dr. ARTURO UMBERTO ILLIA 2302";
		$punto->localidad = "SAN JUSTO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4484-5600";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LADY LINDA";
		$punto->direccion = "COM INDARTE 2435";
		$punto->localidad = "SAN JUSTO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "44820848";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = "JUAN MANUEL DE ROSAS 3990";
		$punto->localidad = "SAN JUSTO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3402";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " PEATONAL BELGRANO 3231";
		$punto->localidad = "SAN MARTIN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3403";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MIGUEL";
		$punto->direccion = "AV. PRES. JUAN DOMINGO PERON 1702";
		$punto->localidad = "SAN MIGUEL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4664-4183";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. PTE. PERON 1334";
		$punto->localidad = "SAN MIGUEL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4451-0882";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. BME. MITRE 1400";
		$punto->localidad = "SAN MIGUEL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "4667-4143";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " PTE. JUAN D. PERON 1361";
		$punto->localidad = "SAN MIGUEL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3410";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "AV SAN MARTIN 601";
		$punto->localidad = "SAN MIGUEL DEL MONTE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541128700685";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "AV SARMIENTO 423";
		$punto->localidad = "SAN VICENTE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541139348206";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " MANUEL PALANCA 2698";
		$punto->localidad = "SOLANO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3416";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "RUTA 205, NESTOR KIRCHNNER 9962";
		$punto->localidad = "SPEGAZZINI";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541131694764";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MAITEN";
		$punto->direccion = "SAN MARTIN 656";
		$punto->localidad = "TANDIL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2293-424786";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MAITEN";
		$punto->direccion = "9 DE JULIO 667";
		$punto->localidad = "TANDIL";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2293-424786";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "ALMIRANTE BROWN 2748";
		$punto->localidad = "TEMPERLEY";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541157272518";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "EVA PERON 1216";
		$punto->localidad = "TEMPERLEY";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541136688948";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA 24";
		$punto->direccion = "DORREGO 324";
		$punto->localidad = "TEMPERLEY";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "0810-222-4365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = "AV. EVA PERON 2992";
		$punto->localidad = "TEMPERLEY";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3414";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "HIPOLITO IRIGOYEN 10583";
		$punto->localidad = "TEMPERLEY";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541136978192";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PERFUMERIA DELMAGRO";
		$punto->direccion = "VILLEGAS 269";
		$punto->localidad = "TRENQUE LAUQUEN";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "2392-628720";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LA PANALERA";
		$punto->direccion = "25 DE MAYO 481";
		$punto->localidad = "TRES ARROYOS";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "291 454-4534";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTO DE SALUD";
		$punto->direccion = "SHOPPING LOS NOGALES, RUTA 205 ESQ LAS HORTENSIAS";
		$punto->localidad = "TRISTAN SUAREZ";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "+541141658979";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " AV LIBERTADOR 7137 ";
		$punto->localidad = "TRUJUI";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3422";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LOS ANGELES";
		$punto->direccion = "CROVARA 801";
		$punto->localidad = "V. INSUPERABLE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1156230548";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DARY";
		$punto->direccion = "J D PERON 3154";
		$punto->localidad = "VALENTIN ALSINA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142082890";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DARY";
		$punto->direccion = "J D PERON 2164";
		$punto->localidad = "VALENTIN ALSINA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142083232";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DARY";
		$punto->direccion = "J D PERON 2477";
		$punto->localidad = "VALENTIN ALSINA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142082890";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX ALSINA";
		$punto->direccion = "J D PERON 2693";
		$punto->localidad = "VALENTIN ALSINA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142083384";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "UOMAX DEL PUENTE";
		$punto->direccion = "J D PERON 3212";
		$punto->localidad = "VALENTIN ALSINA";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142088727";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "VIRGEN DE ITATI 919";
		$punto->localidad = "VILLA CENTENARIO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1158871366";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PUNTOFARMA";
		$punto->direccion = "CRISOLOGO LARRALDE 4602";
		$punto->localidad = "VILLA DOMINICO";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1142064840";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MIRIAM";
		$punto->direccion = "ALSINA 2470";
		$punto->localidad = "VTE. LOPEZ";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "1147964788";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = " JUSTA LIMA DE ATUCHA 887";
		$punto->localidad = "ZARATE";
		$punto->provincia = "BUENOS AIRES";
		$punto->contacto = "5296-3415";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMAPLUS";
		$punto->direccion = "MONTES DE OCA 2185";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4301-3228";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ANIKA SHOP";
		$punto->direccion = "AVDA.SAN MARTIN 2159";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4581-7491";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ANIKA SHOP";
		$punto->direccion = "AVDA SAN MARTIN 2711";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4583-5514";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ANIKA SHOP";
		$punto->direccion = "AVDA. SAN MARTIN 1669";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4581-7491";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ANIKA SHOP";
		$punto->direccion = "CUENCA 2762";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4581-7491";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PORTOFINO";
		$punto->direccion = "PICHINCHA 211";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4954-3517";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "OPENFARMA";
		$punto->direccion = "RIVADAVIA 5444";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "5353-0030";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SOCIAL COBO";
		$punto->direccion = "AV. COBO 1185";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4924-9624";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMABELEN";
		$punto->direccion = "AV. RIESTRA 5701";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4601-0287";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMABELEN";
		$punto->direccion = "AV. RIVADAVIA 9626";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4601-0287";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMABELEN";
		$punto->direccion = "MURGIONDO 4079";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4601-0287";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMABELEN";
		$punto->direccion = "CHILAVERT 6364";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4601-0287";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMABELEN";
		$punto->direccion = "J.B. ALBERTDI 6151";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4601-0287";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMABELEN";
		$punto->direccion = "LOPE DE VEGA 1690";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4601-0287";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "NUEVA POMPEYA";
		$punto->direccion = "AV. SAENZ 895";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4919-0765";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SUIZA";
		$punto->direccion = "AV. BOEDO 937";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4931-1458";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PEREZ ALBERTO";
		$punto->direccion = "AV. CRUZ 4602";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4605-5111";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARADAY";
		$punto->direccion = "BARTOLOME MITRE 3501";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4867-0202";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARADAY";
		$punto->direccion = "AV. RIVADAVIA 4953";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4902-5222";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARADAY";
		$punto->direccion = "ESTACION SUBTE F.LACROZE LOCAL 10";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4554-6606";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "BULNES";
		$punto->direccion = "AV. CORRIENTES 3687";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4866-4018";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LAROCCA";
		$punto->direccion = "AV.RIVADAVIA 3600";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4865-5229";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "REPUBLICA DE BARRACAS";
		$punto->direccion = "MONTES DE OCA 1800";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4301-2310";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "CABILDO 2358";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "TRIUNVIRATO 4576";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "CUENCA 3339";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV. MONROE 5018";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV. CABILDO 1616";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV. CABILDO 834";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV. R. BALBIN 3955";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV. CORRIENTES 3946";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV. SANTA FE 2211";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV.RIVADAVIA 6401";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV.RIVADAVIA 4399";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "FLORIDA 377";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "RIVADAVIA 4585";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV. RIVADAVIA 6713";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PIGMENTO";
		$punto->direccion = "AV PUEYRREDON 232";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "0800-444-7373";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CRAYON";
		$punto->direccion = "AVDA. SANTA FE 5056";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-5620/4143";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CRAYON";
		$punto->direccion = "AV. SANTA FE 4535";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-5620/4143";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CRAYON";
		$punto->direccion = "AVDA CORRIENTES 2120";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-5620/4143";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CRAYON";
		$punto->direccion = "AV. CORRIENTES 4016";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-5620/4143";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. RIVADAVIA 7096";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. RIVADAVIA 5396";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "LAVALLE 674";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. CABILDO 1972";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. CALLAO 251";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. SANTA FE 3377";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. RIVADAVIA 6775";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. SANTA FE 2009";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. CORRIENTES 4033";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. SANTA FE 2630";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "AV. CORRIENTES 2390";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "PARANA 3745";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "JOSE MARIA MORENO 12";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "FLORIDA 921";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TOMASSA";
		$punto->direccion = "BELGRANO 154";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4901-8601/0097";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CRAYON";
		$punto->direccion = "AV. SCALABRINI ORTIZ 2334";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-5620";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CRAYON";
		$punto->direccion = "AVDA. SCALABRINI ORTIZ 2436";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-5620";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CRAYON";
		$punto->direccion = "CABELLO 3581";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-5620";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CRAYON";
		$punto->direccion = "AV. STA. FE 3538";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-5620";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ALAN 2";
		$punto->direccion = "AV. CABILDO 3281";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-3611";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ALAN 2";
		$punto->direccion = "LAS HERAS 2376";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-3611";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ALAN 2";
		$punto->direccion = "RODRIGUEZ PEÑA 1348";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-3611";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ALAN 2";
		$punto->direccion = "RODRIGUEZ PEÑA 1615";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4511-3611";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "VIA PROFUMI";
		$punto->direccion = "AV. ENTRE RIOS 569";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4381-4436";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "VIA PROFUMI";
		$punto->direccion = "AV. ENTRE RIOS 815";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4381-4436";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "VIA PROFUMI";
		$punto->direccion = "AV. ENTRE RIOS 1105";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4381-4436";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "VIA PROFUMI";
		$punto->direccion = "AV. ENTRE RIOS 362";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4381-4436";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LIZA";
		$punto->direccion = "LARRAZABAL 1335";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4635-1831";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LIZA";
		$punto->direccion = "NAZARRE 3222";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4635-1831";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LIZA";
		$punto->direccion = "AV. JONTE 5233";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4635-1831";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "JAK-CAR";
		$punto->direccion = "LOPE DE VEGA 3070";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4639-4070";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "JAK-CAR";
		$punto->direccion = "LOPE DE VEGA 3236";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4639-4070";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "JAK-CAR";
		$punto->direccion = "NOGOYA 3221";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4639-4070";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MARYSANT";
		$punto->direccion = "EVA PERON 3679";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4637-4397";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "NOTTE";
		$punto->direccion = "CHILAVERT 6540";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4602-4594";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "FEMINA";
		$punto->direccion = "AV.GAONA 1283";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4982-4340/45859581";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CELESTE";
		$punto->direccion = "PARANA 639";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4374-5439";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CELESTE";
		$punto->direccion = "PARANA 505";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4374-1860/4393-4184";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TODOS LOS PERFUMES";
		$punto->direccion = "LAVALLE 1460";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4371-2682";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "NORMY";
		$punto->direccion = "CHARCAS 3095";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4821-7558";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "NORMY";
		$punto->direccion = "AV.SANTA FE 3794";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4833-3062";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "STELLA MARIS";
		$punto->direccion = "AV. GAONA 2471";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4581-6925";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AMANCAY";
		$punto->direccion = "AV. CORRIENTES 3666";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4863-3855";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "FALABELLA";
		$punto->direccion = "FLORIDA 202";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. CABILDO 1002";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4787-1778";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "FLORIDA 556";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4322-0121";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. SANTA FE 3002";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4827-4468";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "ACOYTE 42";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "3577-7649";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. SANTA FE 4196";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4774-9037";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "FLORIDA 145";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4342-9865";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. CABILDO 2145";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4788-3388";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. CORRIENTES 5225";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "11-3906-5301";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. RIVADAVIA 6469";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "11-3906-4817";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. SANTA FE 2735";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "4823-5879";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "AV. SANTA FE 3236";
		$punto->localidad = "CABA";
		$punto->provincia = "CABA";
		$punto->contacto = "";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "CALLE 58 835";
		$punto->localidad = "LA PLATA";
		$punto->provincia = "CABA";
		$punto->contacto = "0221-15038022";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = "AV. RIVADAVIA 11526";
		$punto->localidad = "LINIERS";
		$punto->provincia = "CABA";
		$punto->contacto = "5296-3406";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 3;
		$punto->nombre = "COPPEL";
		$punto->direccion = "INTENDENTE FRANCISCO RABANAL 1321";
		$punto->localidad = "POMPEYA";
		$punto->provincia = "CABA";
		$punto->contacto = "5296-3405";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "GALES 701";
		$punto->localidad = "MADRYN";
		$punto->provincia = "CHUBUT";
		$punto->contacto = "2980-447-3124";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "MITRE357";
		$punto->localidad = "PUERTO MADRYN";
		$punto->provincia = "CHUBUT";
		$punto->contacto = "280-497-2277";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "GALES 1310";
		$punto->localidad = "PUERTO MADRYN";
		$punto->provincia = "CHUBUT";
		$punto->contacto = "298-441-7464";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "LIBERTAD 467";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDBOA";
		$punto->contacto = "3571414256";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "SAN MARTIN 345";
		$punto->localidad = "ALEJANDRO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584980002";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "FALABELLA";
		$punto->direccion = "DUARTE QUIROZ 1400";
		$punto->localidad = "CORDOBA";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "9 DE JULIO Y CENTE";
		$punto->localidad = "MOLDES";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3582466643";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL SUD";
		$punto->direccion = "H. IYIGOYEN 1039";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584644637";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL SUD";
		$punto->direccion = "ALVEAR 1227";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584645697";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL SUD";
		$punto->direccion = "AV. ITALIA 1302";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584651269";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL SUD";
		$punto->direccion = "AV. SABATTINI 3104";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584646258";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL SUD";
		$punto->direccion = "ALVEAR 872";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584680132";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL SUD";
		$punto->direccion = "SAN MARTIN 2108";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584652777";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL SUD";
		$punto->direccion = "SAN MARTIN 1030";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584782211";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL SUD";
		$punto->direccion = "CASTELLI 1095";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "358562348";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "GRAL. PAZ 103";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584650330";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "BUENOS AIRES 101";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3585626359";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "FOTHERINGHAM 97";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584637526";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "M.T DE ALVEAR 703";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584750030";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "P. GOYENA 110";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584664902";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "BELGRANO 23";
		$punto->localidad = "RIO CUARTO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3584622372";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PONTE";
		$punto->direccion = "R. S. PEÑA Y MAGNA";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "8007777668";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PONTE";
		$punto->direccion = "AVDA. SAVIO ESQ. SAN MIGUEL";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "8007777668";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PONTE";
		$punto->direccion = "ACUÑA Y MAGNASCO";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "8007777668";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PONTE";
		$punto->direccion = "IRIGOYEN Y CONSTITUCION";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "8007777668";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PONTE";
		$punto->direccion = "GARIBALDI 329";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "8007777668";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PONTE";
		$punto->direccion = "AV. SAN MARTIN 802";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "8007777668";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PONTE";
		$punto->direccion = "LIBERTAD ESQ. O. TREJO";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "8007777668";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIANA";
		$punto->direccion = "E. CARRIEGO 944";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3571512829";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIANA";
		$punto->direccion = "LIBERTAD 298";
		$punto->localidad = "RIO TERCERO";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3571418668";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL SUD";
		$punto->direccion = "MISIONES 150";
		$punto->localidad = "UCACHA";
		$punto->provincia = "CORDOBA";
		$punto->contacto = "3534900115";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ARGENTINA";
		$punto->direccion = "BERON DE ASTRADA 795";
		$punto->localidad = "CURUZU CUATIA";
		$punto->provincia = "CORRIENTES";
		$punto->contacto = " (03774)-429991";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "AVANCINI";
		$punto->direccion = "COLON 898";
		$punto->localidad = "PASO DE LOS LIBRES";
		$punto->provincia = "CORRIENTES";
		$punto->contacto = "03772-423965 ";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LOS 95";
		$punto->direccion = "ROCAMORA 794";
		$punto->localidad = "C DEL URUGUAY";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "(03442)-422609 ";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ALBERDI";
		$punto->direccion = "ALBERDI 758";
		$punto->localidad = "C.DEL URUGUAY";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "03442-422332";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MARIVER";
		$punto->direccion = "URQUIZA 1197";
		$punto->localidad = "CHAJARI";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "3456422861";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "CENTENARIO";
		$punto->direccion = "SAN MARTIN 552 Y PTE. PERON";
		$punto->localidad = "COLON";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "0343-424004";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FRANCIA";
		$punto->direccion = "0343-424004";
		$punto->localidad = "COLON";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "(03447)-422390";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ROQUE";
		$punto->direccion = "SAN ANTONIO 101";
		$punto->localidad = "GUALEGUAY";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = " (03444)-424060";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "RAFFE";
		$punto->direccion = "25 DE MAYO 871";
		$punto->localidad = "GUALEGUAYCHU";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "0343-154650735";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "EL CEPILLO";
		$punto->direccion = "SAN MARTIN 1070";
		$punto->localidad = "GUALEGUAYCHU";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = " (03446)-433476 ";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "COLORES";
		$punto->direccion = "25 DE MAYO Y MAIPU";
		$punto->localidad = "GUALEGUAYCHU";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "(03446)-422638 ";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "VILLEGAS";
		$punto->direccion = " AV LAURENCENA 116";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "0343 431 3946";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "VILLEGAS";
		$punto->direccion = "CHURRUARIN Y BLAS PARERAS";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "0343- 4344663";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "VILLEGAS";
		$punto->direccion = "AV DE LAS AMÉRICAS 1693";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "0343 431 4789";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "VILLEGAS";
		$punto->direccion = "2 - BLAS PARERA 785 ";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "0343 434 4663";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "VILLEGAS";
		$punto->direccion = "ALMTE GUILLERMO BROWN 552,";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "3434343695";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "VILLEGAS";
		$punto->direccion = "AV P ZANNI 1516";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "(0343)4364171";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "RAFFE";
		$punto->direccion = "SAN MARTIN Y URUGUAY";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = " (0343)-4314124";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "RAFFE";
		$punto->direccion = "SHOPING LA PAZ";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = " (0343)-4314125";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CHEZ JUAN";
		$punto->direccion = "ALMAFUERTE 1529";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "(0343)-4313495 ";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CHEZ JUAN";
		$punto->direccion = "25 DE MAYO 181";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "(0343)-4313495 ";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CHEZ JUAN";
		$punto->direccion = "SAN MARTIN 615";
		$punto->localidad = "PARANA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "(0343)-4313495 ";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "MARZORATTI";
		$punto->direccion = "CHACABUCO 1564";
		$punto->localidad = "SAN JOSE";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "03447-470256";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL LITORAL";
		$punto->direccion = "SARMIENTO Y ALEM";
		$punto->localidad = "VICTORIA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "(03436)-421254 ";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "CENTENARIO";
		$punto->direccion = "JOSE M ESTRADA 1644";
		$punto->localidad = "VILLA ELISA";
		$punto->provincia = "ENTRE RIOS";
		$punto->contacto = "3447481207";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "GAIOTTINO HECTOR";
		$punto->direccion = "CALLE 20N 775";
		$punto->localidad = "GRAL PICO";
		$punto->provincia = "LA PAMPA";
		$punto->contacto = "2302-435039";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN DAMIAN";
		$punto->direccion = "AVDA SPINETTO 598";
		$punto->localidad = "SANTA ROSA";
		$punto->provincia = "LA PAMPA";
		$punto->contacto = "2954-421216";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LA PANALERA";
		$punto->direccion = "PELLEGRINI 64";
		$punto->localidad = "SANTA ROSA";
		$punto->provincia = "LA PAMPA";
		$punto->contacto = "291 454-4534";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 4;
		$punto->nombre = "ZETA SPORT";
		$punto->direccion = "AV. ALVEAR OESTE 276";
		$punto->localidad = "GENERAL ALVEAR";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "2625-413877";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "FALABELLA";
		$punto->direccion = "ACC. ESTE 3280 SHOPPING";
		$punto->localidad = "GUAYMALLEN";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ALMACEN DE FRAGANCIAS";
		$punto->direccion = "SAN MARTIN 1418";
		$punto->localidad = "MENDOZA";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "261-5325769";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MAGGOT";
		$punto->direccion = "GRAL PAZ Y ESPAÑA";
		$punto->localidad = "MENDOZA";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "261-4295421";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MAGGOT";
		$punto->direccion = "PRIMITIVO DE LA RETA 1092";
		$punto->localidad = "MENDOZA";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "261-4200886";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MAGGOT";
		$punto->direccion = "ESPEJO 22";
		$punto->localidad = "MENDOZA";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "261-4292019";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "RUS MARI";
		$punto->direccion = "GRAL PAZ 392";
		$punto->localidad = "MENDOZA";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "261-5559051";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "JUMALU";
		$punto->direccion = "SAN JUAN 1248";
		$punto->localidad = "MENDOZA";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "261-3000785";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "SAN MARTIN 1556";
		$punto->localidad = "MENDOZA";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "0261-155114597";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LAS MARGARITAS";
		$punto->direccion = "NECOCHEA 55";
		$punto->localidad = "MENDOZA";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "0261-155114597";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "CUYO";
		$punto->direccion = "SAN MARTIN 2918 (OESTE)";
		$punto->localidad = "RIVADAVIA";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "264-6715777";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MAGGOT";
		$punto->direccion = "SAN MARTIN 63";
		$punto->localidad = "SAN RAFAEL";
		$punto->provincia = "MENDOZA";
		$punto->contacto = "260-4412155";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "PARAGUAY N°3";
		$punto->localidad = "CENTENARIO";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-489-0400";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "HONDURAS 1195";
		$punto->localidad = "CENTENARIO";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-634-1697";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA NORTE";
		$punto->direccion = "AV OLASCOAGA Y MENDOZA";
		$punto->localidad = "CUTRAL CO";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-486-3085";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "DR RAMON231";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-447-4233";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "COMBATE DE SAN LORNZO 712";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-590-2100";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "DIAGONAL ESPAÑA 91";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-635-2510";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "SAN MARTIN 3581";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-438-7837";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "BAHIA BLANCA 18";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-418-1978";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "SAN MARTIN 23";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-448-7029";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "SARMIENTO346";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-447-6091";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "ALDERETE 57";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-448-9690";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ALPINA";
		$punto->direccion = "SAN MARTIN 4305";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-446-3330";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "SAN MARTIN 2141";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-442-5509";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "OLASCOAGA";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-448-7900";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "RUFINO ORTEGA 1070";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-632-8516";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "ISLAS MALVINAS 1350";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-448-1809";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "BELGRANO 2715";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-446-5663";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "ILLIA 774";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-443-1440";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "CABELLERA DEL FRIO1460";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-656-4637";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "RIVADAVIA280";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-458-7340";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "LA RIOJA 31";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-443-8839";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ALPINA";
		$punto->direccion = "FOTHERINGHAM 150";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-447-0558";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "JOSE ROSA 920";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-587-8825";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "SAN MARTIN 99";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-445-7200";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "BELGRANO 801";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-443-7895";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "AV DR RAMON 355";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-445-3936";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "MITRE 73";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-442-2374";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "L RAMON 4100";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-445-0917";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "ITALIA 40";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-442-2292";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "J B JUSTO 301";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-443-8306";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "JUAN B ALBERDI 290";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-442-2912";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "ANTARTIDA ARG. 1111";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-442-2375";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "PERITO MOERNO 246";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-442-2305";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "PERTICONE 1401";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-440-1939";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "AV SAN MARTIN";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-493-5143";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "J J LASTRA 2400";
		$punto->localidad = "NEUQUEN";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-446-3300";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA NORTE";
		$punto->direccion = "SAN MARTIN CASI LAS LAJAS";
		$punto->localidad = "PLAZA HUINCUL";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-486-2993";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA NORTE";
		$punto->direccion = "AV KEIDEL Y 9 DE JULIO";
		$punto->localidad = "PLAZA HUINCUL";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-486-3426";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIAS GLOBAL";
		$punto->direccion = "BELGRANO 245 PLOTTIER";
		$punto->localidad = "PLOTTIER";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "299-493-3755";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "COMAHUE";
		$punto->direccion = "SAN MARTIN920";
		$punto->localidad = "SAN MARTIN DE LOS ANDES";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "297-242-7298";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "AV SAN MARTIN";
		$punto->localidad = "ZAPALA";
		$punto->provincia = "NEUQUEN";
		$punto->contacto = "294-243-0883";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "AV ROCA 498";
		$punto->localidad = "ALLEN";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "299-445-3935";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DE MIGUEL";
		$punto->direccion = "MITRE 130";
		$punto->localidad = "BARILOCHE";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "294-442-3025";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DR. ELUSTONDO";
		$punto->direccion = "MITRE 379";
		$punto->localidad = "BARILOCHE";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "294-442-2847";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SUPER CLIN";
		$punto->direccion = "TISCORNIA 602";
		$punto->localidad = "BARILOCHE";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "294-443-2546";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SUPER CLIN";
		$punto->direccion = "AV LOS PINEROS 7400";
		$punto->localidad = "BARILOCHE";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "294-421-7257";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LA 2";
		$punto->direccion = "SHOPING PATAG. BCHE";
		$punto->localidad = "BARILOCHE";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "294-441-4763";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA DEL PUEBLO";
		$punto->direccion = "ESPAÑA 252";
		$punto->localidad = "CIPOLLETTI";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "299-477-6191";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA NORTE";
		$punto->direccion = "LA ESMERALDA 1870";
		$punto->localidad = "CIPOLLETTI";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "299-479-2020";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA NORTE";
		$punto->direccion = "AV MENGUELLE 1263";
		$punto->localidad = "CIPOLLETTI";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "299-478-3566";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMACIA NORTE";
		$punto->direccion = "SAN MARTIN 459";
		$punto->localidad = "CIPOLLETTI";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "299-478-1243";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SUPER CLIN";
		$punto->direccion = "25 DE MAYO 2401";
		$punto->localidad = "EL BOLSON";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "294-472-0480";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MARTIN";
		$punto->direccion = "SAN MARTIN 87";
		$punto->localidad = "GENERAL ROCA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "298-466-3634";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MARTIN";
		$punto->direccion = "AV SAN JUAN 1617";
		$punto->localidad = "GENERAL ROCA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "298-460-4848";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MARTIN";
		$punto->direccion = "TUCUMAN 389";
		$punto->localidad = "GENERAL ROCA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "298-466-3638";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MARTIN";
		$punto->direccion = "BUENOS AIRES 991";
		$punto->localidad = "GENERAL ROCA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "298-460-4694";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MARTIN";
		$punto->direccion = "JUJUY 1832";
		$punto->localidad = "GENERAL ROCA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "298-486-1066";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MARTIN";
		$punto->direccion = "SARMIENTO 1462";
		$punto->localidad = "GENERAL ROCA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "298-453-5875";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MARTIN";
		$punto->direccion = "ALSINA 4";
		$punto->localidad = "GENERAL ROCA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "298-413-1224";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "FARMA SUR";
		$punto->direccion = "SAN MARTIN 411";
		$punto->localidad = "VIEDMA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "2920-426030";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "CASA DEL JUBILADO";
		$punto->direccion = "PUEYRREDON 601";
		$punto->localidad = "VIEDMA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "2920-431940";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BASILE";
		$punto->direccion = "BS AS 88";
		$punto->localidad = "VIEDMA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "2920-427735";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ITALIA";
		$punto->direccion = "SAN MARTIN 351";
		$punto->localidad = "VILLA REGINA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "298-446-1365";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "ITALIA";
		$punto->direccion = "AV CIPOLLETTI 245";
		$punto->localidad = "VILLA REGINA";
		$punto->provincia = "RIO NEGRO";
		$punto->contacto = "298-445-5057";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MARTIN";
		$punto->direccion = "LIB. SAN MARTIN 3540 (OESTE)";
		$punto->localidad = "RIVADAVIA";
		$punto->provincia = "SAN JUAN";
		$punto->contacto = "264-4215555";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN MARTIN";
		$punto->direccion = "LIB. SAN MARTIN 593 (OESTE)";
		$punto->localidad = "SAN JUAN";
		$punto->provincia = "SAN JUAN";
		$punto->contacto = "264-4215555";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "GUAPAS";
		$punto->direccion = "RIVADAVIA 212 (ESTE)";
		$punto->localidad = "SAN JUAN";
		$punto->provincia = "SAN JUAN";
		$punto->contacto = "264-4984671";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "GUAPAS";
		$punto->direccion = "RIVADAVIA 299 (ESTE)";
		$punto->localidad = "SAN JUAN";
		$punto->provincia = "SAN JUAN";
		$punto->contacto = "264-4984671";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "GUAPAS";
		$punto->direccion = "TUCUMAN 91 (SUR)";
		$punto->localidad = "SAN JUAN";
		$punto->provincia = "SAN JUAN";
		$punto->contacto = "264-4984671";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MORENA";
		$punto->direccion = "LAPRIDA 113 (ESTE)";
		$punto->localidad = "SAN JUAN";
		$punto->provincia = "SAN JUAN";
		$punto->contacto = "264-6618170";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MORENA";
		$punto->direccion = "TUCUMAN 59 (SUR)";
		$punto->localidad = "SAN JUAN";
		$punto->provincia = "SAN JUAN";
		$punto->contacto = "264-6618170";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MORENA";
		$punto->direccion = "HIPER LIBERTAD LOCAL 95";
		$punto->localidad = "SAN JUAN";
		$punto->provincia = "SAN JUAN";
		$punto->contacto = "264-6618170";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "FALABELLA";
		$punto->direccion = "TUCUMAN SUR 163";
		$punto->localidad = "SAN JUAN";
		$punto->provincia = "SAN JUAN";
		$punto->contacto = "";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN LUIS";
		$punto->direccion = "JUNIN 1530";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664453788";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL AGUILA";
		$punto->direccion = "RIVADAVIA 1052";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664426739";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LOS ALAMOS";
		$punto->direccion = "PRINGLES 911";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664446695";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LOS ALAMOS";
		$punto->direccion = "JUNIN 914";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664424139";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LOS ALAMOS";
		$punto->direccion = "SAN MARTIN 502";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664421587";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LOS ALAMOS";
		$punto->direccion = "MAIPU 935";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664421347";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LOS ALAMOS";
		$punto->direccion = "BOLIVAR 1259";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664422681";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LOS ALAMOS";
		$punto->direccion = "LAS HERAS";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664422258";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LOS ALAMOS";
		$punto->direccion = "EL TRAPICHE";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664493207";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LOS ALAMOS";
		$punto->direccion = "ITUZAINGO 1282";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664435865";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LOS ALAMOS";
		$punto->direccion = "PRINGLES 929";
		$punto->localidad = "SAN LUIS";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2664420882";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "GRASSI";
		$punto->direccion = "BALCARCE 399";
		$punto->localidad = "V. MERCEDES";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2657420182";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "10 DE MARZO";
		$punto->direccion = "BALCARCE 322";
		$punto->localidad = "V. MERCEDES";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2657425071";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "STIA 1";
		$punto->direccion = "AVDA. MITRE 1167";
		$punto->localidad = "V. MERCEDES";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2675433315";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL AGUILA";
		$punto->direccion = "EDISON 2";
		$punto->localidad = "V. MERCEDES";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2657427444";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL AGUILA";
		$punto->direccion = "PEDERNERA 301";
		$punto->localidad = "V. MERCEDES";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2657427444";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL AGUILA";
		$punto->direccion = "MITRE 601";
		$punto->localidad = "V. MERCEDES";
		$punto->provincia = "SAN LUIS";
		$punto->contacto = "2657427444";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AN NET";
		$punto->direccion = "CALLE 10. N 412";
		$punto->localidad = "AVELLANEDA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "03482-481260";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "JEANNETTE";
		$punto->direccion = "SAN LORENZO 957";
		$punto->localidad = "C.BERMUDEZ";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414912130";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "RECAL";
		$punto->direccion = "1 DE MAYO 2212";
		$punto->localidad = "CASILDA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3464424689";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ARIVAL";
		$punto->direccion = "TRAY L BELTRÁN 3343";
		$punto->localidad = "CASILDA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3464424767";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ALIAM";
		$punto->direccion = "BV. AMERICA 921";
		$punto->localidad = "EL TREBOL";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3401422147";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "BELGRANO 2086 ESQ COLONIZADORES";
		$punto->localidad = "ESPERANZA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3492 66 6967";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SUPERLIM";
		$punto->direccion = "BUENOS AIRES 901";
		$punto->localidad = "FIRMAT";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3465421178";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOY LOLA";
		$punto->direccion = "CORDOBA 1743";
		$punto->localidad = "FUNES";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414935665";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TALLONE";
		$punto->direccion = "LISANDRO DE LA TORRE 465";
		$punto->localidad = "GALVEZ";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "03404-482920";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "KOKETTE";
		$punto->direccion = "BELGRANO 5";
		$punto->localidad = "GRANADERO BAIGORRIA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3415611701";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "BIAMONTE";
		$punto->direccion = "AV. 21 N° 686";
		$punto->localidad = "LAS PAREJAS";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3471470889";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "PIRES";
		$punto->direccion = "ITALIA Y MAIPU";
		$punto->localidad = "LAS ROSAS";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3471451090";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "PEATONAL SAN MARTÍN 1071";
		$punto->localidad = "PARANA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3492 66 6957";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "BV SANTA FE 257";
		$punto->localidad = "RAFAELA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3492 66 6902";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "BV ROCA 383";
		$punto->localidad = "RAFAELA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3492 20 9687";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "OLIVERAS";
		$punto->direccion = "BELGRANO 198";
		$punto->localidad = "RAFAELA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "03492-422472";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "AN NET";
		$punto->direccion = "GENERAL OBLIGADO 953";
		$punto->localidad = "RECONQUISTA";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "03482-424444";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "ARIJON 2199";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414652960";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "OVIDIO LAGOS 2199";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414638292";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "ITALIA 1431";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414243066";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "MENDOZA 1595";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414361088";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "1 DE MAYO 1698";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414482387";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "CORDOBA 2999";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414307795";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "SARMIENTO 999";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414494654";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "AVELLANEDA 384 BI";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414307966";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "SAN LUIS 2101";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414262690";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "RED SHOP";
		$punto->direccion = "BV. SEGUI 5203";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414314706";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ANA";
		$punto->direccion = "SAN MARTIN 4940";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414653727";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ANA";
		$punto->direccion = "SAN MARTIN 5294";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414619130";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ANA";
		$punto->direccion = "MITRE 1069";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414244597";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ANA";
		$punto->direccion = "SAN LUIS 1275";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414268767";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ROMELIA";
		$punto->direccion = "MENDOZA 6021";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414594471";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "KOKETTE";
		$punto->direccion = "AV ALBERDI 235";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414385380";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "POPIS";
		$punto->direccion = "OV LAGOS 2822";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "341334211";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOY LOLA";
		$punto->direccion = "PARAGUAY 886";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414485910";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOY LOLA";
		$punto->direccion = "AV ALBERDI 635";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414371232";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOY LOLA";
		$punto->direccion = "MENDOZA 3884";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414372146";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOY LOLA";
		$punto->direccion = "SARMIENTO 853";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414266206";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOY LOLA";
		$punto->direccion = "FISHERTON MALL";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414371232";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOY LOLA";
		$punto->direccion = "SAN MARTIN 5071";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414641033";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SOY LOLA";
		$punto->direccion = "TERMINAL OMNIBUS";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414377209";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIFERENT";
		$punto->direccion = "MENDOZA 3827";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414360653";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIFERENT";
		$punto->direccion = "MENDOZA 3606";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414357794";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIFERENT";
		$punto->direccion = "PELLEG Y ENTRE RIOS";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414267834";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIFERENT";
		$punto->direccion = "CORDOBA 2411";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414267832";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIFERENT";
		$punto->direccion = "CORRIENTES 885";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414253010";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIFERENT";
		$punto->direccion = "CORRIENTES 477";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414248009";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIFERENT";
		$punto->direccion = "MITRE730";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414406506";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "DIFERENT";
		$punto->direccion = "SAN MARTIN 1051";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414473970";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BEZENA";
		$punto->direccion = "CORDOBA Y DORREGO";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414267839";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "INTERNACIONALES";
		$punto->direccion = "SAN MARTIN 1051";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414481267";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "PALACIO OPORTUNIDAD";
		$punto->direccion = "CORRIENTES 981";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414112699";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "POUSO AVELINA";
		$punto->direccion = "CAFFERATA 627";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414390078";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "KOKKETTE";
		$punto->direccion = "AV ALBERDI 696";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414249693";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "KOKKETTE";
		$punto->direccion = "BV RONDEU 3397";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414545871";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "KOKKETTE";
		$punto->direccion = "AV ALBERDI 996";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414387052";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "KOKKETTE";
		$punto->direccion = "SALTA 1948";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414211729";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "FALABELLA";
		$punto->direccion = "CORDOBA 1101";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "FIOL";
		$punto->direccion = "SAN MARTIN 1353";
		$punto->localidad = "SAN LORENZO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3476423088";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "KOKETTE";
		$punto->direccion = "SAN LORENZO 899";
		$punto->localidad = "SAN LORENZO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3476422727";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "PEATONAL SAN MARTÍN 2472";
		$punto->localidad = "SANTA FE";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3492 66 7014";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "SHOPPING LA RIBERA - LOCAL 13 - DIQUE 1";
		$punto->localidad = "SANTA FE";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3492 66 1383";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "OLIVERAS";
		$punto->direccion = "SAN MARTIN 2418";
		$punto->localidad = "SANTA FE";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "0342-4540860";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "GENOVA";
		$punto->direccion = "AV ARISTOBULO DEL VALLE 6691";
		$punto->localidad = "SANTA FE";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "0342-4603003";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "GENOVA";
		$punto->direccion = "AV GENERAL PAZ 6996";
		$punto->localidad = "SANTA FE";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "0324-4608179";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SUTIL";
		$punto->direccion = "SAN MARTIN 2822";
		$punto->localidad = "SANTA FE";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "0324-551817";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SUTIL";
		$punto->direccion = "SALTA 2567";
		$punto->localidad = "SANTA FE";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "0243-4536011";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "KAIAL";
		$punto->direccion = "SALTA 2844";
		$punto->localidad = "SANTA FE";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "0342-4521753";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SANTORO";
		$punto->direccion = "AV ARISTOBULO DEL VALLE 6484";
		$punto->localidad = "SANTA FE";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "0342-4606319";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CAGLIERO";
		$punto->direccion = "AMEGHINO 85";
		$punto->localidad = "SUNCHALES";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "03493-422325";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SHOP";
		$punto->direccion = "SAN MARTIN 1501";
		$punto->localidad = "V. CONSTITUCIÓN";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3400479217";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SHOP";
		$punto->direccion = "14 DE FEBRERO 896";
		$punto->localidad = "V. CONSTITUCIÓN";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3400473627";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BERMELIA";
		$punto->direccion = "BELGRANO 330";
		$punto->localidad = "V. TUERTO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3462435344";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "BERMELIA";
		$punto->direccion = "MITRE Y L DE TORRE";
		$punto->localidad = "V. TUERTO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3462463409";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "SILVINA";
		$punto->direccion = "BELGRANO 740";
		$punto->localidad = "V. TUERTO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3462421741";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "SAN JORGE";
		$punto->direccion = "AV. PELLEGRINI 809";
		$punto->localidad = "ROSARIO";
		$punto->provincia = "SANTA FE";
		$punto->contacto = "3414817191";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "TAZAR";
		$punto->direccion = "MITRE Y REPUBLICA";
		$punto->localidad = "CLODOMIRA";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-4921305";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "BELGRANO";
		$punto->direccion = "AV. BELGRANO 141";
		$punto->localidad = "LA BANDA";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-4210055";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LA ESQUINA";
		$punto->direccion = "RUTA 1 Y 51";
		$punto->localidad = "LA BANDA";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-6003417";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MARYBE";
		$punto->direccion = "ESPAÑA 99";
		$punto->localidad = "LA BANDA";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-4278840";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LA ESQUINA";
		$punto->direccion = "LA PLATA 99";
		$punto->localidad = "SGO. DEL ESTERO";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-4210055";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LA ESQUINA";
		$punto->direccion = "MITRE 270";
		$punto->localidad = "SGO. DEL ESTERO";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-6002513";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LA ESQUINA";
		$punto->direccion = "ABSALON ROJA 995";
		$punto->localidad = "SGO. DEL ESTERO";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-6005103";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "LA ESQUINA";
		$punto->direccion = "9 DE JULIO 554";
		$punto->localidad = "SGO. DEL ESTERO";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-4250404";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MARYBE";
		$punto->direccion = "PELLEGRINI 141";
		$punto->localidad = "SGO. DEL ESTERO";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-4211687";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MARYBE";
		$punto->direccion = "TUCUMAN 20";
		$punto->localidad = "SGO. DEL ESTERO";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-5189775";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MARYBE";
		$punto->direccion = "ABSALON ROJA 55";
		$punto->localidad = "SGO. DEL ESTERO";
		$punto->provincia = "SGO. DEL ESTERO";
		$punto->contacto = "0385-4211687";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "VIOLETTE";
		$punto->direccion = "ALVERDI 926";
		$punto->localidad = "AGUILARES";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "03865-481045";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "VIRGEN DEL VALLE";
		$punto->direccion = "ITALIA 1211";
		$punto->localidad = "CONCEPCION";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "03865-424064";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "VIOLETTE";
		$punto->direccion = "SAN MRTIN 1390";
		$punto->localidad = "CONCEPCION";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "03865-421139";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "AV. ALEM 199";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4212149";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "AV. BELGRANO 2847";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4527784";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "AV. COLON 596";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4527780";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "MAIPU 27";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4220439";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "25 DE MAYO 313";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4216600";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "CORDOBA 652";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4979181";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "AV. ROCA 830";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4800472";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "AV. AVELLANEDA 268";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4979161";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "JUJUY 120";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4524600";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "VIR. DE LA MERCED 561";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4254603";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "25 DE MAYO 789";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4226346";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MARYBE";
		$punto->direccion = "MAIPU 131";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4311340";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "MARYBE";
		$punto->direccion = "25 DE MAYO 256";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0385-4714948";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ZUNNY";
		$punto->direccion = "MENDOZA 727";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4226005";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "ZUNNY";
		$punto->direccion = "MAIPU 238";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4217141";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LIM-TUC";
		$punto->direccion = "JUNIN 243";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4217066";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LIMP-TODO";
		$punto->direccion = "JUNIN 129";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4300018";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "LA ISLA";
		$punto->direccion = "MENDOZA 764";
		$punto->localidad = "S.M.DE TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4307303";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 2;
		$punto->nombre = "CORTASSA";
		$punto->direccion = "25 DE MAYO 222";
		$punto->localidad = "TUCUMAN";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "3492 64 6314";
		$punto->save();

		$punto = new PuntoDeVenta();
		$punto->tipo_id = 1;
		$punto->nombre = "DEL PUEBLO";
		$punto->direccion = "AV.ACONQUIJA 1336";
		$punto->localidad = "YERBA BUENA";
		$punto->provincia = "TUCUMAN";
		$punto->contacto = "0381-4256444";
		$punto->save();

    }
}
