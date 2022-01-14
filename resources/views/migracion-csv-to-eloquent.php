<meta name="csrf-token" content="{{ csrf_token() }}">
<?php
use App\Models\NotaOlfativaPorPerfume;
$full_dir = public_path() . "/familias.csv";

$notas = array();
if (($handle = fopen($full_dir, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
//     dd($data);
           $perfume_id = $data[0];
//           $perfume_detalle = $data[1];
        $nota1 = strtolower($data[2]);

        $nota2 = strtolower($data[3]);
        if (isset($nota1) && $nota1 !== "" && !in_array($nota1, $notas)) {
            array_push($notas, $nota1);

        }
        if (isset($nota2) && $nota2 !== $nota1 && $nota2 !== "" && !in_array($nota2, $notas)) {
            array_push($notas, $nota2);

        }


           if(isset($nota1) && $nota1 !== "")
           {
               echo "\$perfume = Perfume::find(".$perfume_id.");<br/>";
               echo "\$perfume->addNotaOlfativaPorNombre(\"$nota1\"); <br/>";

           }
          if(isset($nota2) && $nota2 !== $nota1 && $nota2 !== "")
          {
               echo "\$perfume->addNotaOlfativaPorNombre(\"$nota2\"); <br/>";
          }
         if($nota1 !== "" || $nota2 !== "")
         {
             echo "\$perfume->save();<br/><br/>";

         }


    }
}
//function array_iunique($array) {
//    $lowered = array_map('strtolower', $array);
//    return array_map('strtolower',(array_intersect_key($array, array_unique($lowered))));
//}
//foreach (array_iunique($notas) as $nota) {
//    echo "NotaOlfativa::create([\"nombre\" => \"".$nota."\"]);<br/>";
//    }
?>
<?php
//     MIGRACION CSV A ELOQUENT - VARIEDADES 2.0

// $dir = public_path();

//                $files = scandir($dir);


//                $full_dir = $dir."/uptvar.txt";
//                $file = file_get_contents($full_dir);
//                $s = explode(';', $file);
//                $len = sizeof($s);
//                $z = 0;
//                $y = 1;
//                $variedadess = [];
//            for ($i = 0; $i < $len-1; $i++) {
//                if($z == 0)
//                {
//                    $ean_index = $s[$i];
////                  echo "codigoean: ".$s[$i]."<br/>";
////                  echo "\$variedad = new Perfume();<br/>";
////                  echo "\$variedad->id = $y;<br/>";
//                }
//                if($z == 1)
//                {


////                  echo "codigocata: ".$s[$i]."<br/>";
////                  echo "\$variedad->nombre = \"$s[$i]\";<br/>";
//                }
//                if($z == 2)
//                {
////                  echo "precio: ".$s[$i]."<br/>";
////                  echo "\$variedad->fragancia = \"$s[$i]\";<br/>";
//                  echo "\$variedad = Variedad::where('codigo_catalogo', '".$s[$i-1]."')->update(['codigo_ean' => '".$s[$i-2]."', 'precio' => '".$s[$i]."']);<br/>";
//                }


//                              $z++;
//                              if($z == 3){
//                                $z = 0;
//                                $y++;
////                                echo "\$variedad->save();<br/><br/>";
//                              }

//                                   }

//              $variedadess = json_encode($variedadess);
// ?><!-- -->


<!-- 	--><?php //$dir = public_path();
// 		TESTEO FALTAN 2.0
//
//        				$files = scandir($dir);
//
//
//                $full_dir = $dir."/articulos.txt";
//                $file = file_get_contents($full_dir);
//                $s = explode(';', $file);
//                $len = sizeof($s);
//                $z = 0;
//                $y = 1;
//                $variedadess = [];
// 						for ($i = 0; $i < $len-1; $i++) {
// 								if($z == 0)
// 								{
//                    $ean_index = $s[$i];
//                 //  echo "codigoean: ".$s[$i]."<br/>";
// 								//	echo "\$variedad = new Perfume();<br/>";
// 								//	echo "\$variedad->id = $y;<br/>";
// 								}
// 								if($z == 1)
// 								{
//
//                 array_push($variedadess, $s[$i]);
//
//                  //echo "codigocata: ".$s[$i]."<br/>";
// 								//	echo "\$variedad->nombre = \"$s[$i]\";<br/>";
// 								}
// 								if($z == 2)
// 								{
//                  //echo "precio: ".$s[$i]."<br/>";
// 									//echo "\$variedad->fragancia = \"$s[$i]\";<br/>";
// 								}
//
//
//                      			  $z++;
//                      			  if($z == 3){
//                      			  	$z = 0;
//                      			  	$y++;
//                      			  //	echo "\$variedad->save();<br/><br/>";
//                      			  }
//
//                   								 }
//
//              $variedadess = json_encode($variedadess);
// ?>


<!--
<button id="xd">asd</button>

  <div id="data">


 </div>-->


<!--   --><?php //$dir = public_path();
// MIGRACION CSV A ELOQUENT - PERFUMES
//
//                $files = scandir($dir);
//
//
//                        $full_dir = $dir."/variedades-v2.txt";
//                        $file = file_get_contents($full_dir);
//                        $s = explode(';', $file);
//                        $len = sizeof($s);
//                        $z = 0;
//                        $y = 1;
//            for ($i = 0; $i < $len-1; $i++) {
//                if($z == 0)
//                {
//                  echo "\$variedad = new Perfume();<br/>";
//                  echo "\$variedad->id = $s[$i];<br/>";
//                }
//                if($z == 1)
//                {
//                  echo "\$variedad->nombre = \"$s[$i]\";<br/>";
//                }
//                if($z == 2)
//                {
//                  echo "\$variedad->fragancia = \"$s[$i]\";<br/>";
//                }
//                if($z == 3)
//                {
//                  echo "\$variedad->linea_id = $s[$i];<br/>";
//                }
//                if($z == 4)
//                {
//                  echo "\$variedad->marca_id = $s[$i];<br/>";
//                }
//                if($z == 5)
//                {
//                  echo "\$variedad->is_premium = $s[$i];<br/>";
//                }
//
//                              $z++;
//                              if($z == 6){
//                                $z = 0;
//                                $y++;
//                                echo "\$variedad->save();<br/><br/>";
//                              }
//
//                                   }
// ?>
<?php //$dir = public_path();
// 		MIGRACION CSV A ELOQUENT - VARIEDADES

//        				$files = scandir($dir);


//                        $full_dir = $dir."/v2var.txt";
//                        $file = file_get_contents($full_dir);
//                        $s = explode(';', $file);
//                        $len = sizeof($s);
//                        $z = 0;
//                        $y = 1;
// 						for ($i = 0; $i < $len-1; $i++) {
// 								if($z == 0)
// 								{
// 									echo "\$variedad = new Variedad();<br/>";
// 									echo "\$variedad->id = $s[$i];<br/>";
// 									$id = $s[$i];
// 								}
// 								if($z == 1)
// 								{
// 									echo "\$variedad->perfume_id = $s[$i];<br/>";
// 								}
// 								if($z == 2)
// 								{
// 									echo "\$variedad->codigo_catalogo = \"$s[$i]\";<br/>";
//                                    echo "\$variedad->activo = 1;<br/>";
//                                    echo "\$variedad->orden = \"$id\";<br/>";

// 								}

//                      			  $z++;
//                      			  if($z == 3){
//                      			  	$z = 0;
//                      			  	$y++;
//                      			  	echo "\$variedad->save();<br/><br/>";
//                      			  }

//                   								 }
// ?>

<!--  	--><?php //$dir = public_path();
// MIGRACION CSV A ELOQUENT - PRESENTACIONES_X_VARIEDADES
//
//        				$files = scandir($dir);
//
//
//                        $full_dir = $dir."/pxxv.txt";
//                        $file = file_get_contents($full_dir);
//                        $s = explode(';', $file);
//                        $len = sizeof($s);
//                        $z = 0;
//
// 						for ($i = 0; $i < $len-1; $i++) {
// 								if($z == 0)
// 								{
// 									echo "\$presentacionPorVariedad = new PresentacionPorVariedad();<br/>";
// 									echo "\$presentacionPorVariedad->presentacion_id = $s[$i];<br/>";
// 								}
// 								if($z == 1)
// 								{
// 									echo "\$presentacionPorVariedad->variedad_id = $s[$i];<br/>";
// 								}
// 								if($z == 2)
// 								{
// 									echo "\$presentacionPorVariedad->vap = $s[$i];<br/>";
// 								}
// 								if($z == 3)
// 								{
// 									echo "\$presentacionPorVariedad->vol = $s[$i];<br/>";
// 								}
// 								if($z == 4)
// 								{
// 									echo "\$presentacionPorVariedad->medida = \"$s[$i]\";<br/>";
// 								}
//
//
//                      			  $z++;
//                      			  if($z == 5){
//                      			  	$z = 0;
//
//                      			  	echo "\$presentacionPorVariedad->save();<br/><br/>";
//                      			  }
//
//
//                								 }

//   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
//  <script type="text/javascript">
// $(document).ready(function(){
//
//   $(document).on('click', '#xd', function(event){
//
//      $.ajaxSetup({
//               headers: {
//               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//               }
//              });
//
//              $.ajax({
//                url:"/m",
/*                data: {data: '<?php echo $variedadess ?>'},*/
//                type: "post",
//                success:function(data)
//                {
//                 $('#data').html(data);
//                },
//                error: function (data)
//                {
//                 alert('error');
//                }
//                   });
//      });
//  });</script>


?>
