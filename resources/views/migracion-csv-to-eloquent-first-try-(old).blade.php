{{--
		MIGRACION CSV A ELOQUENT - PERFUMES
 	<?php $dir = public_path();

        				$files = scandir($dir);


                        $full_dir = $dir."/variedades.txt";
                        $file = file_get_contents($full_dir);
                        $s = explode(';', $file);
                        $len = sizeof($s);
                        $z = 0;
                        $y = 1;
 						for ($i = 0; $i < $len-1; $i++) {
 								if($z == 0)
 								{
 									echo "\$variedad = new Perfume();<br/>";
 									echo "\$variedad->id = $y;<br/>";
 								}
 								if($z == 1)
 								{
 									echo "\$variedad->nombre = \"$s[$i]\";<br/>";
 								}
 								if($z == 2)
 								{
 									echo "\$variedad->fragancia = \"$s[$i]\";<br/>";
 								}
 								if($z == 3)
 								{
 									echo "\$variedad->linea_id = $s[$i];<br/>";
 								}
 								if($z == 4)
 								{
 									echo "\$variedad->marca_id = $s[$i];<br/>";
 								}
 								if($z == 5)
 								{
 									echo "\$variedad->is_premium = $s[$i];<br/>";
 								}

                      			  $z++;
                      			  if($z == 6){
                      			  	$z = 0;
                      			  	$y++;
                      			  	echo "\$variedad->save();<br/><br/>";
                      			  }

                   								 }
 ?> --}}


	{{-- 	MIGRACION CSV A ELOQUENT - VARIEDADES
 	<?php $dir = public_path();

        				$files = scandir($dir);


                        $full_dir = $dir."/variedades.txt";
                        $file = file_get_contents($full_dir);
                        $s = explode(';', $file);
                        $len = sizeof($s);
                        $z = 0;
                        $y = 1;
 						for ($i = 0; $i < $len-1; $i++) {
 								if($z == 0)
 								{
 									echo "\$variedad = new Variedad();<br/>";
 									echo "\$variedad->id = $y;<br/>";
 								}
 								if($z == 1)
 								{
 									echo "\$variedad->perfume_id = $s[$i];<br/>";
 								}
 								if($z == 2)
 								{
 									echo "\$variedad->codigo_catalogo = \"$s[$i]\";<br/>";
 								}

                      			  $z++;
                      			  if($z == 3){
                      			  	$z = 0;
                      			  	$y++;
                      			  	echo "\$variedad->save();<br/><br/>";
                      			  }

                   								 }
 ?>
 --}}
 {{-- 	MIGRACION CSV A ELOQUENT - PRESENTACIONES_X_VARIEDADES
 	<?php $dir = public_path();

        				$files = scandir($dir);


                        $full_dir = $dir."/presentaciones_x_variedades.txt";
                        $file = file_get_contents($full_dir);
                        $s = explode(';', $file);
                        $len = sizeof($s);
                        $z = 0;

 						for ($i = 0; $i < $len-1; $i++) {
 								if($z == 0)
 								{
 									echo "\$presentacionPorVariedad = new PresentacionPorVariedad();<br/>";
 									echo "\$presentacionPorVariedad->presentacion_id = $s[$i];<br/>";
 								}
 								if($z == 1)
 								{
 									echo "\$presentacionPorVariedad->variedad_id = $s[$i];<br/>";
 								}
 								if($z == 2)
 								{
 									echo "\$presentacionPorVariedad->vap = $s[$i];<br/>";
 								}
 								if($z == 3)
 								{
 									echo "\$presentacionPorVariedad->vol = $s[$i];<br/>";
 								}
 								if($z == 4)
 								{
 									echo "\$presentacionPorVariedad->medida = \"$s[$i]\";<br/>";
 								}


                      			  $z++;
                      			  if($z == 5){
                      			  	$z = 0;

                      			  	echo "\$presentacionPorVariedad->save();<br/><br/>";
                      			  }

                   								 }
 ?> --}}
