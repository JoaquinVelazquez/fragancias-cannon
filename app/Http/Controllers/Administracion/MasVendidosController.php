<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MasVendido;
use App\Models\Perfume;
use App\Http\Requests\MasVendidosRequest;


class MasVendidosController extends Controller
{
    public function index()
    {
        $masVendidos = MasVendido::all()->sortBy('orden');
        return view('/administracion/destacados', ['masVendidos' => $masVendidos]);
    }

    public function create()
    {
        $masVendidos = MasVendido::all();
        $perfumes = Perfume::all();
        return view('/administracion/creardestacado', ['masVendido' => $masVendidos, 'perfumes' => $perfumes]);
    }

    public function store(MasVendidosRequest $request)
    {

        $masVendidos = new MasVendido();

        $masVendidos->perfume_id = $request->get('perfume_id');
        $masVendidos->orden = $request->get('orden');


        $masVendidos->save();

        return redirect('/destacados');
    }

    public function edit($id)
    {
        $masVendido = MasVendido::find($id);
        $perfumes = Perfume::all();
        $ordenes = MasVendido::all();
        return view('/administracion/editardestacado', ['masVendido' => $masVendido, 'perfumes' => $perfumes, 'ordenes' => $ordenes]);
    }

    public function update(Request $request, $id)
    {

        try {

            $masVendido = MasVendido::find($id);

            //geteo si existe algún perfume en el orden elegido
            $perfume_target = MasVendido::where('orden', $request->orden)->first();
            if($perfume_target)
            {
                //si existe le pongo el orden actual que tiene el perfume a actualizar
                $perfume_target->orden = $masVendido->orden;
                $perfume_target->save();
            }
            //luego procedo a cambiar el orden del perfume a editar por el anterior sin problemas.
            $masVendido->perfume_id = $request->get('perfume_id');
            $masVendido->orden = $request->get('orden');
    
            $masVendido->save();
    
            return redirect('/destacados');
          } catch (\Illuminate\Database\QueryException $e) {
                return redirect('/destacados');
          }

    }

    public function destroy($id)
    {
        $masVendido = MasVendido::find($id);
        $masVendido->delete();
        return redirect('/destacados');
    }


}
