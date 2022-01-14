<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PuntoDeVenta
 *
 * @property int $id
 * @property int $tipo_id
 * @property string $nombre
 * @property string $direccion
 * @property string $localidad
 * @property string $provincia
 * @property string $contacto
 * @property string|null $latitud
 * @property string|null $longitud
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta query()
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereContacto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereLatitud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereLocalidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereLongitud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereProvincia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereTipoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PuntoDeVenta whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\TipoPuntoDeVenta $tipo
 */
class PuntoDeVenta extends Model
{
    use HasFactory;

    protected $table = "puntos_de_venta";

    protected $fillable = ['tipo_id', 'nombre', 'direccion', 'contacto'];

    public function tipo()
    {
    	return $this->belongsTo(TipoPuntoDeVenta::class);
    }
}
