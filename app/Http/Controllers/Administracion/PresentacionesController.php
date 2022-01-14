<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Presentacion;

class PresentacionesController extends Controller
{
    //
    public function index()
    {
        $presentaciones = Presentacion::all();
        return view('/administracion/presentaciones', ['presentaciones'=>$presentaciones]);
    }

    public function create()
    {
        $presentaciones = Presentacion::all();
        return view('/administracion/crearpresentacion', ['presentaciones'=>$presentaciones]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'descripcion' => 'required',
        ]);

        $presentaciones = new Presentacion();
        $presentaciones -> descripcion = $request->get('descripcion');

        $presentaciones->save();

        return redirect('/presentaciones');
    }

    public function edit($id)
    {
        $presentacion = Presentacion::find($id);
        return view('/administracion/editarpresentacion', ['presentacion'=>$presentacion]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'descripcion' => 'required',
        ]);

        $presentacion = Presentacion::find($id);
        $presentacion->descripcion = $request->get('descripcion');
        $presentacion->save();
        return redirect('/presentaciones');
    }

    public function destroy($id)
    {
        $presentacion = Presentacion::find($id);
        $presentacion->delete();
        return redirect('/presentaciones');
    }
}
