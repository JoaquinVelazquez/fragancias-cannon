<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\Campania;

class CampaniaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $campanias = Campania::whereHas('perfume', function (Builder $query) use ($request) {
                if($request->linea != 0)
                {
                    $query->where('linea_id', $request->linea);
                }
            })->get();
            $view_c = view('wrapper-campanias', compact('campanias'))->render();

            return response()->json(['html_c' => $view_c]);
        }else
        {
            $campanias = Campania::all();
            return view('campaigns', ['campanias' => $campanias]);

        }
    }
}
