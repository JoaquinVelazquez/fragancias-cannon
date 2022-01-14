<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DetalleProductoController;
use App\Http\Controllers\CampaniaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Administracion\AdministracionController;
use App\Http\Controllers\Administracion\LineasController;
use App\Http\Controllers\Administracion\MarcasController;
use App\Http\Controllers\Administracion\PerfumesController;
use App\Http\Controllers\Administracion\PresentacionesController;
use App\Http\Controllers\Administracion\MasVendidosController;
use App\Http\Controllers\Administracion\CarouselController;
use App\Http\Controllers\Administracion\HistoriaController;
use App\Http\Controllers\Administracion\PresentacionPorVariedadController;
use App\Http\Controllers\Administracion\VariedadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
/*HOME CONTROLLER*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/nosotros', [HomeController::class, 'nosotros']);

Route::get('/clientes', [HomeController::class, 'clientes']);
Route::get('/clientes/usuario', [HomeController::class, 'usuarios']);
Route::get('/clientes/comercio', [HomeController::class, 'comercios']);

/*DETALLE PRODUCTO*/
Route::get('/detalle/{id}/{tipo}', [DetalleProductoController::class, 'detalle']);
Route::get('/detalle/{id}/', [DetalleProductoController::class, 'detalle']);
Route::post('/getNearestShop', [DetalleProductoController::class, 'getNearestShop']);

/*CONTACTO*/
Route::get('/contacto', [ContactoController::class, 'contacto']);
Route::post('/contacto/send', [ContactoController::class, 'enviarEmail']);

/*ADMINISTRACION*/
Route::group(['middleware' => 'admins'], function () {

    Route::get('/apanel', [AdministracionController::class, 'index'])->name('apanel');

    /*CAROUSEL CRUD*/
    Route::get('/carousel', [CarouselController::class, 'index']);
    Route::get('/crearcarousel', [CarouselController::class, 'create']);
    Route::post('/carousel', [CarouselController::class, 'store']);
    Route::get('/carousel/{id}/editarcarousel', [CarouselController::class, 'edit']);
    Route::put('/carousel/{id}/update', [CarouselController::class, 'update']);
    Route::delete('/carousel/{id}/delete', [CarouselController::class, 'destroy']);

    /*LINEAS*/
    Route::get('/lineas', [LineasController::class, 'index']);
    Route::get('/crearlinea', [LineasController::class, 'create']);
    Route::post('/lineas', [LineasController::class, 'store']);
    Route::get('/lineas/{id}/editarlinea', [LineasController::class, 'edit']);
    Route::put('/lineas/{id}/update', [LineasController::class, 'update']);
    Route::delete('/lineas/{id}/delete', [LineasController::class, 'destroy']);

    /*MARCAS*/
    Route::get('/marcas', [MarcasController::class, 'index']);
    Route::get('/crearmarca', [MarcasController::class, 'create']);
    Route::post('/marcas', [MarcasController::class, 'store']);
    Route::get('/marcas/{id}/editarmarca', [MarcasController::class, 'edit']);
    Route::put('/marcas/{id}/update', [MarcasController::class, 'update']);
    Route::delete('/marcas/{id}/delete', [MarcasController::class, 'destroy']);

    /*PERFUMES*/
    Route::get('/perfumes', [PerfumesController::class, 'index']);
    Route::get('/crearperfume', [PerfumesController::class, 'create']);
    Route::post('/perfumes', [PerfumesController::class, 'store']);
    Route::get('/perfumes/{id}/editarperfume', [PerfumesController::class, 'edit']);
    Route::put('/perfumes/{id}/update', [PerfumesController::class, 'update']);
    Route::delete('/perfumes/{id}/delete', [PerfumesController::class, 'destroy']);

    /*PRESENTACIONES*/
    Route::get('/presentaciones', [PresentacionesController::class, 'index']);
    Route::get('/crearpresentacion', [PresentacionesController::class, 'create']);
    Route::post('/presentaciones', [PresentacionesController::class, 'store']);
    Route::get('/presentaciones/{id}/editarpresentacion', [PresentacionesController::class, 'edit']);
    Route::put('/presentaciones/{id}/update', [PresentacionesController::class, 'update']);
    Route::delete('/presentaciones/{id}/delete', [PresentacionesController::class, 'destroy']);

    /*MASVENDIDOS*/
    Route::get('/destacados', [MasVendidosController::class, 'index']);
    Route::get('/creardestacado', [MasVendidosController::class, 'create']);
    Route::post('/destacados', [MasVendidosController::class, 'store']);
    Route::get('/destacados/{id}/editardestacado', [MasVendidosController::class, 'edit']);
    Route::put('/destacados/{id}/update', [MasVendidosController::class, 'update']);
    Route::delete('/destacados/{id}/delete', [MasVendidosController::class, 'destroy']);

    /*VARIEDADES*/
    Route::get('/variedades', [VariedadController::class, 'index']);
    Route::get('/crearvariedad', [VariedadController::class, 'create']);
    Route::post('/variedades', [VariedadController::class, 'store']);
    Route::get('/variedades/{id}/editarvariedad', [VariedadController::class, 'edit']);
    Route::put('/variedades/{id}/update', [VariedadController::class, 'update']);
    Route::delete('/variedades/{id}/delete', [VariedadController::class, 'destroy']);

    /*PRESENTACIONESXVARIEDADES*/
    Route::get('/presentacionesporvariedades', [PresentacionPorVariedadController::class, 'index']); 
    Route::get('/crearpresentacionporvariedad', [PresentacionPorVariedadController::class, 'create']); 
    Route::post('/presentacionesporvariedades', [PresentacionPorVariedadController::class, 'store']); 
    Route::get('/presentacionesporvariedades/{id}/editarpresentacionporvariedad', [PresentacionPorVariedadController::class, 'edit']); 
    Route::put('/presentacionesporvariedades/{id}/update', [PresentacionPorVariedadController::class, 'update']); 
    Route::delete('/presentacionesporvariedades/{id}/delete', [PresentacionPorVariedadController::class, 'destroy']); 

    /*USUARIOS*/
    Route::get('/usuarios', [AdministracionController::class, 'show']);
    Route::delete('/usuarios/{id}/delete', [AdministracionController::class, 'destroy']);

    /*HISTORIA*/
    Route::get('/historia', [HistoriaController::class, 'index']);
    Route::get('/crearhistoria', [HistoriaController::class, 'create']);
    Route::post('/historia', [HistoriaController::class, 'store']);
    Route::get('/historia/{id}/editarhistoria', [HistoriaController::class, 'edit']);
    Route::put('/historia/{id}/update', [HistoriaController::class, 'update']);
    Route::delete('/historia/{id}/delete', [HistoriaController::class, 'destroy']);


});
    /*CAMPANIAS*/
    Route::get('/campaigns', [CampaniaController::class, 'index']);



/*MIGRATIONS/TESTING PURPOSE ONLY*/
Route::get('/migrar', [HomeController::class, 'migrar']);
Route::post('/m', [HomeController::class, 'migrarAjax']);
Route::get('/old', [HomeController::class, 'old']);
Route::get('/mail', [ContactoController::class, 'mail']);
