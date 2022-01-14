<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdministracionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admins');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('administracion.home', ['pageTitle' => 'APanel']);
    }

    public function show()
    {
        $usuarios=User::all();
        return view('/administracion/usuarios', ['usuarios'=>$usuarios]);
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
  
}
