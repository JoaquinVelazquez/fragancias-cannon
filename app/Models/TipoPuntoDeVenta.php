<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TipoPuntoDeVenta
 *
 * @property int $id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPuntoDeVenta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPuntoDeVenta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPuntoDeVenta query()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPuntoDeVenta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPuntoDeVenta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPuntoDeVenta whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPuntoDeVenta whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PuntoDeVenta[] $puntosDeVenta
 * @property-read int|null $puntos_de_venta_count
 */
class TipoPuntoDeVenta extends Model
{
    use HasFactory;

    protected $table = "tipos_punto_de_venta";

    protected $fillable = ['id', 'nombre'];

    public function puntosDeVenta()
    {
    	return $this->hasMany(PuntoDeVenta::class);
    }
}
