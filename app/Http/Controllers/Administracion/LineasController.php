<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Linea;

class LineasController extends Controller
{
    //
    public function index()
    {
        $lineas = Linea::all();
        return view('/administracion/lineas', ['lineas'=>$lineas]);
    }

    public function create()
    {
        $lineas = Linea::all();
        return view('/administracion/crearlinea', ['lineas'=>$lineas]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nombre' => 'required',
        ]);

        $lineas = new Linea();
        $lineas -> nombre = $request->get('nombre');

        $lineas->save();

        return redirect('/lineas');
    }

    public function edit($id)
    {
        $linea = Linea::find($id);
        return view('/administracion/editarlinea', ['linea'=>$linea]);
    }

    public function update(Request $request, $id)
    {

        $validateData = $request->validate([
            'nombre' => 'required',
        ]);
        
        $linea = Linea::find($id);

        $linea->nombre = $request->get('nombre');

        $linea->save();

        return redirect('/lineas');
    }

    public function destroy($id)
    {
        $linea = Linea::find($id);
        $linea->delete();
        return redirect('/lineas');
    }

}
