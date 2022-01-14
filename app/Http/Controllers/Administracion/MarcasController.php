<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Marca;

class MarcasController extends Controller
{
    //
    public function index()
    {
        $marcas = Marca::all();
        return view('/administracion/marcas', ['marcas'=>$marcas]);
    }

    public function create()
    {
        $marcas = Marca::all();
        return view('/administracion/crearmarca', ['marcas'=>$marcas]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nombre' => 'required',
        ]);

        $marcas = new Marca();
        $marcas -> nombre = $request->get('nombre');

        $marcas->save();

        return redirect('/marcas');
    }

    public function edit($id)
    {
        $marca = Marca::find($id);
        return view('/administracion/editarmarca', ['marca'=>$marca]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nombre' => 'required',
        ]);
        
        $marca = Marca::find($id);

        $marca->nombre = $request->get('nombre');

        $marca->save();
        return redirect('/marcas');
    }

    public function destroy ($id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        return redirect('/marcas');
    }
}
