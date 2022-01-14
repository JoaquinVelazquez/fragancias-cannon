<?php

namespace App\Http\Controllers;

use App\Models\Variedad;
use Illuminate\Http\Request;

use App\Models\Perfume;
use App\Models\PuntoDeVenta;
use App\Models\TipoPuntoDeVenta;


class DetalleProductoController extends Controller
	{
    public function detalle(Request $request)
    {
        $producto = Perfume::find($request->id);
        $relacionados = Variedad::limit(4)->get();


        return view('detalle_producto', ['producto' => $producto, 'tipo' => $request->tipo, 'variedades' => $relacionados]);
    }

public function getNearestShop(Request $request)
    {
        $puntos = PuntoDeVenta::select("*", \DB::raw("6371 * acos(cos(radians(" . $request->lat . "))
                                * cos(radians(latitud)) * cos(radians(longitud) - radians(" . $request->lng . "))
                                + sin(radians(" .$request->lat. ")) * sin(radians(latitud))) AS distance"));
        // $puntos = $puntos->having('distance', '<', 20);
        $puntos = $puntos->orderBy('distance', 'asc');

        $puntos = $puntos->limit(3)->get();
        $tipos = TipoPuntoDeVenta::all();
        $data["puntos"] = $puntos;
        $data["tipos"] = $tipos;
        return $data;
    }

	}
?>
