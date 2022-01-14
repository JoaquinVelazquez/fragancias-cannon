<?php

namespace App\Http\Controllers;

use App\Models\NotaOlfativa;
use App\Models\NotaOlfativaPorPerfume;
use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Perfume;
use App\Models\ImagenCarousel;
use App\Models\Variedad;
use App\Models\PresentacionPorVariedad;
use App\Models\Presentacion;
use App\Models\Lanzamiento;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    protected $count = 15;
    protected $count_l = 2;


    public function __construct()
    {

    }

    public function index(Request $request)
    {
        //si es una solicitud ajax
        if ($request->ajax()) {
            //si proviene de la sección fragancias
            if(isset($request->page)){
                //aplico filtros a nivel perfume
                $perfumes = Perfume::deLinea($request->linea)
                                   ->active()
                                   ->keyword($request->keyword)
                                   ->deMarca($request->marca)
                                   ->notaOlfativa($request->nota);
                //aplico filtro sobre las variedades para conseguir 1 variedad de cada perfume de acuerdo al tipo si no esta aplicado el filtro de ediciones limitadas

                $limited = $request->linea == 5;
                list($v, $m, $n) = $perfumes->presentacion($request->type, $limited);
                //consigo las marcas para mostrar el filtro
                $marcas = Marca::whereIn('id', $m)->get();
                //consigo las notas olfativas para mostrar el filtro
                $notas_olfativas = NotaOlfativa::whereIn('id', $n)->get();
                //finalmente consigo las variedades que vamos a enviar a la vista
                //aplico filtros a nivel variedad
                $variedades = Variedad::whereIn('variedades.id', $v)
                                      ->join('perfumes', 'variedades.perfume_id', "=",'perfumes.id')
                                      ->leftJoin('mas_vendidos', 'variedades.perfume_id', "=",'mas_vendidos.perfume_id')
                                      ->select(['variedades.*', 'perfumes.linea_id', 'perfumes.orden', DB::raw('IFNULL(mas_vendidos.orden, 20) as ranking')])
                    // ordeno por '>, < precio', o ranking si esta activo dicho filtro
                                      ->sort($request->sort)
                    // subordeno por linea 2, 3 ,1
                                      ->orderByRaw('FIELD(perfumes.linea_id,2,3,1)')
                    // subordeno finalmente por el orden arbitrario que se le de
                                      ->orderBy('perfumes.orden');

//                dd($variedades->get()->toArray());
                //pagino las variedades
                $variedades = $variedades->paginate($this->count);
                //obtengo el nro de ult pag para saber cuando no mostrar más el botón de 'Ver más'
                $last_page = $variedades->lastPage();
                //mando esta variable solamente para armar el link al perfume, al desodorante o la edicion limitada según corresponda
                $tipo = $limited ? "l" : ($request->type == 2 ? "d" : "");
                //renderizo el wrapper de productos para enviar
                $view = view('wrapper-productos',compact('variedades', 'tipo'))->render();

                return response()->json(['html'=>$view, 'marcas' => $marcas, 'last_page' => $last_page, 'tipo' =>  $tipo, 'notas_olfativas' => $notas_olfativas]);
            }
            // si proviene de la sección lanzamientos
            else
            {
                $lanzamientos = Lanzamiento::orderBy('orden', 'asc')
                                           ->paginate($this->count_l, ['*'], 'page_l');

                $last_page_l = $lanzamientos->lastPage();
                $view_l = view('wrapper-lanzamientos', compact('lanzamientos'))->render();

                return response()->json(['html_l' => $view_l, 'last_page_l' => $last_page_l]);
            }

        }
        // traigo las imgs del carousel
        $imagenes_carousel = ImagenCarousel::orderBy('orden', 'asc')->get();

        $marcas_activas = new Marca;


        $hombres = $marcas_activas->getMarcas($marcas_activas->getActivas()->deLinea(3)->pluck('marca_id'));

        $mujer = $marcas_activas->getMarcas($marcas_activas->getActivas()->deLinea(2)->pluck('marca_id'));

        $ninios = $marcas_activas->getMarcas($marcas_activas->getActivas()->deLinea(1)->pluck('marca_id'));

        $alianzas = $marcas_activas->getMarcas($marcas_activas->getActivas()->deLinea(4)->pluck('marca_id'));


        return view('home', ['imagenes_carousel' => $imagenes_carousel,
                             'hombres' => $hombres,
                             'mujeres' => $mujer,
                             'ninios' => $ninios,
                             'alianzas' => $alianzas

                         ]);
    }

    public function detalle(Request $request)
    {
        $producto = Perfume::find($request->id);

        return view('detalle_producto', ['producto' => $producto]);
    }


    public function nosotros()
    {
        return view('nosotros');
    }

    public function clientes()
    {
        return view('clientes');
    }


    public function usuarios()
    {
        return view('clientesUsuarios');
    }
    
    public function comercios()
    {
        return view('clientesComercios');
    }



    public function migrar()
    {
        $variedades = Variedad::all();
        return view('migracion-csv-to-eloquent', ['variedades' => $variedades]);
    }

    public function migrarAjax(Request $request)
    {
        $i = 0;

        foreach(array_values(json_decode($request->data, true)) as $d)
        {
           $v = Variedad::where('codigo_catalogo', $d)->get();
           $cod = $v;
           if(($cod) == "[]")
           {
            echo $i." - ".$d."<br/>";
           }
            $i++;

        }



    }

}
