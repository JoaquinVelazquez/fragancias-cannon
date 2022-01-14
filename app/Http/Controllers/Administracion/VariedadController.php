<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Variedad;
use App\Models\Perfume;

class VariedadController extends Controller
{
    public function index()
    {
        $variedades = Variedad::all();
        return view('/administracion/variedades', ['variedades'=>$variedades]);
    }

    public function create()
    {
        $variedades = Variedad::all();
        $perfumes = Perfume::all();
        return view('/administracion/crearvariedad', ['variedades'=>$variedades, 'perfumes'=>$perfumes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'perfume_id' => 'required',
            'codigo_catalogo' => 'required',
            'codigo_ean' => 'required',
            'precio' => 'required',
            'activo' => 'required',
            'limited' => 'required',
        ]);

        $variedades = new Variedad();
        $orden = Variedad::max('orden') + 1;

        $variedades -> perfume_id = $request->get('perfume_id');
        $variedades -> codigo_catalogo = $request->get('codigo_catalogo');
        $variedades -> codigo_ean = $request->get('codigo_ean');
        $variedades -> precio = $request->get('precio');
        $variedades -> orden = $orden;
        $variedades -> activo = $request->get('activo');
        $variedades -> limited = $request->get('limited');

        $variedades->save();
        
        return redirect ('/variedades');
    }

    public function edit($id)
    {
        $variedad = Variedad::find($id);
        $perfumes = Perfume::all();

        return view('/administracion/editarvariedad', ['variedad'=>$variedad, 'perfumes'=>$perfumes]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'perfume_id' => 'required',
            'codigo_catalogo' => 'required',
            'codigo_ean' => 'required',
            'precio' => 'required',
            'activo' => 'required',
            'limited' => 'required',
        ]);

        $variedad = Variedad::find($id);

        $variedad -> perfume_id = $request->get('perfume_id');
        $variedad -> codigo_catalogo = $request->get('codigo_catalogo');
        $variedad -> codigo_ean = $request->get('codigo_ean');
        $variedad -> precio = $request->get('precio');
        $variedad -> activo = $request->get('activo');
        $variedad -> limited = $request->get('limited');

        $variedad->save();

        return redirect('/variedades');
    }

    public function destroy($id)
    {
        $variedad = Variedad::find($id);
        $variedad->delete();
        return redirect('/variedades');
    }
}
