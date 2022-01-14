<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfume;
use App\Models\Linea;
use App\Models\Marca;


class PerfumesController extends Controller
{
    //
    public function index()
    {
        $perfumes = Perfume::all();
        return view('/administracion/perfumes', ['perfumes'=>$perfumes]);
    }

    public function create()
    {
        $perfumes = Perfume::all();
        $lineas = Linea::all();
        $marcas = Marca::all();

        return view ('/administracion/crearperfume', ['perfumes'=>$perfumes, 'lineas'=>$lineas , 'marcas'=>$marcas]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nombre' => 'required',
            'fragancia' => 'required',
            'is_premium' => 'required',
            'linea_id' => 'required',
            'marca_id' => 'required',
        ]);

        $perfumes = new Perfume();
        $orden = Perfume::max('orden') + 1;

        $perfumes -> nombre = $request->get('nombre');
        $perfumes -> fragancia = $request->get('fragancia');
        $perfumes -> linea_id = $request->get('linea_id');
        $perfumes -> marca_id = $request->get('marca_id');
        $perfumes -> is_premium = $request->get('is_premium');
        $perfumes -> facebook = $request->get('facebook');
        $perfumes -> instagram = $request->get('instagram');
        $perfumes -> orden = $orden;


        $perfumes->save();

        return redirect('/perfumes');
    }

    public function edit($id)
    {
        $perfume = Perfume::find($id);
        $lineas = Linea::all();
        $marcas = Marca::all();
        return view('/administracion/editarperfume', ['perfume'=>$perfume, 'lineas'=>$lineas , 'marcas'=>$marcas]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nombre' => 'required',
            'fragancia' => 'required',
            'is_premium' => 'required',
            'linea_id' => 'required',
            'marca_id' => 'required',
        ]);

        $perfume = Perfume::find($id);

        $perfume -> nombre = $request->get('nombre');
        $perfume -> fragancia = $request->get('fragancia');
        $perfume -> linea_id = $request->get('linea_id');
        $perfume -> marca_id = $request->get('marca_id');
        $perfume -> is_premium = $request->get('is_premium');
        $perfume -> facebook = $request->get('facebook');
        $perfume -> instagram = $request->get('instagram');
        $perfume->save();

        return redirect('/perfumes');
    }

    public function destroy($id)
    {
        $perfume = Perfume::find($id);
        $perfume->delete();
        return redirect('/perfumes');
    }
}
