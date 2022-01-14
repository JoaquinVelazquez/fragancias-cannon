<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImagenCarousel;

class CarouselController extends Controller
{
    //
    public function index()
    {
        $imagenesCarousel = ImagenCarousel::all();
        return view('/administracion/carousel', ['imagenesCarousel'=>$imagenesCarousel]);
    }

    public function create()
    {
        $imagenesCarousel = ImagenCarousel::all();
        return view('/administracion/crearcarousel', ['imagenesCarousel'=>$imagenesCarousel]);
    }

    public function store (Request $request)
    {
        // dd($request->all());

        $request->validate([
            'nombre' => 'required|max:50',
            'link' => 'required',
            'imagen' => 'required|mimes:jpg|max:5048'
        ]);

        $orden = ImagenCarousel::max('orden') + 1;

        $imagenCarousel = ImagenCarousel::create([
            'nombre' => $request -> nombre,
            'link' => $request -> link,
            'orden' => $orden
        ]);

        $nombreImagen = $imagenCarousel->id.'.'.$request->imagen->extension();
        $request->imagen->move(public_path('img/carousel'), $nombreImagen);
        
        return redirect('/carousel');
    }

    public function edit($id)
    {
        $imagenCarousel = ImagenCarousel::find($id);
        $ordenes = ImagenCarousel::all();
        return view('/administracion/editarcarousel', ['imagencarousel'=>$imagenCarousel, 'ordenes'=>$ordenes]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nombre' => 'required|max:50',
            'link' => 'required',
            'orden' => 'required',
        ]);

        $imagenCarousel = ImagenCarousel::find($id);

        $imagenCarousel->nombre = $request->get('nombre');
        $imagenCarousel->link = $request->get('link');
        $imagenCarousel->orden = $request->get('orden');
        
        $imagenCarousel->save();

        return redirect('/carousel');
    }

    public function destroy($id)
    {
        $imagenCarousel = ImagenCarousel::find($id);
        $nombreImagen = $imagenCarousel->id.'.'.'jpg';

        unlink(public_path('img/carousel/').$nombreImagen);

        $imagenCarousel->delete();

        return redirect('/carousel');
    }
}
