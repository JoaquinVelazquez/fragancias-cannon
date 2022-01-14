<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Historia;

class HistoriaController extends Controller
{
    //
    public function index()
    {
        $historias = Historia::all();
        return view('/administracion/historia', ['historias'=>$historias]);
    }

    public function create()
    {
        $historias = Historia::all();
        return view('/administracion/crearhistoria', ['historias'=>$historias]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'texto' => 'required',
        ]); 

        $historias = new Historia();
        $historias -> texto = $request->get('texto');

        $historias->save();

        return redirect('/historia');
    }

    public function edit($id)
    {
        $historia = Historia::find($id);
        return view('/administracion/editarhistoria', ['historia'=>$historia]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'texto' => 'required',
        ]); 

        $historia = Historia::find($id);

        $historia->texto = $request->get('texto');

        $historia->save();

        return redirect('/historia');
    }

    public function destroy ($id)
    {
        $historia = Historia::find($id);
        $historia->delete();
        return redirect('/historia');
    }
}
