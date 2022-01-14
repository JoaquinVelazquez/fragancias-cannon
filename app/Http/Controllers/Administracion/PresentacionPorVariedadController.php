<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PresentacionPorVariedad;
use App\Models\Variedad;
use App\Models\Presentacion;

class PresentacionPorVariedadController extends Controller
{
    //
    public function index()
    {
        $presxvariedades = PresentacionPorVariedad::all();
        return view('/administracion/presentacionesporvariedades', ['presxvariedades'=>$presxvariedades]);
    }

    public function create()
    {
        $presxvariedades = PresentacionPorVariedad::all();
        $presentaciones = Presentacion::all();
        $variedades = Variedad::all();

        return view('/administracion/crearpresentacionporvariedad', ['presxvariedades'=>$presxvariedades, 'presentaciones'=>$presentaciones, 'variedades'=>$variedades]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'presentacion_id'=>'required',
            'variedad_id'=>'required',
            'vap'=>'required',
            'medida'=>'required',
            'vol'=>'required',
        ]);

        try {
            $presxvariedades = new PresentacionPorVariedad();

            $presxvariedades -> presentacion_id = $request->get('presentacion_id');
            $presxvariedades -> variedad_id = $request->get('variedad_id');
            $presxvariedades -> vap = $request->get('vap');
            $presxvariedades -> medida = $request->get('medida');
            $presxvariedades -> vol = $request->get('vol');
    
            $presxvariedades->save();
    
            return redirect('/presentacionesporvariedades');
          
          } catch (\Illuminate\Database\QueryException $e) {
                return redirect('/presentacionesporvariedades');
          }


    }

    public function edit($id)
    {
        $presxvariedad = PresentacionPorVariedad::find($id);
        $presentaciones = Presentacion::all();
        return view('/administracion/editarpresentacionporvariedad', ['presxvariedad'=>$presxvariedad, 'presentaciones'=>$presentaciones]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'presentacion_id'=>'required',
            'vap'=>'required',
            'medida'=>'required',
            'vol'=>'required',
        ]);

        try {
            $presxvariedad = PresentacionPorVariedad::find($id);

            $presxvariedad -> presentacion_id = $request->get('presentacion_id');
            $presxvariedad -> vap = $request->get('vap');
            $presxvariedad -> medida = $request->get('medida');
            $presxvariedad -> vol = $request->get('vol');
    
            $presxvariedad->save();
    
            return redirect('/presentacionesporvariedades');
          } catch (\Illuminate\Database\QueryException $e) {
                return redirect('/presentacionesporvariedades');
          }

    }

    public function destroy($id)
    {
        $presxvariedad = PresentacionPorVariedad::find($id);
        $presxvariedad->delete();
        return redirect('/presentacionesporvariedades');
    }
}
