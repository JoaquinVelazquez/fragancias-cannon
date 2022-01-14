<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Variedad
 *
 * @property int $id
 * @property int $perfume_id
 * @property string $codigo_catalogo
 * @property string|null $codigo_ean
 * @property float $precio
 * @property int $orden
 * @property int $activo
 * @property int $limited
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Perfume $perfume
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PresentacionPorVariedad[] $presentacionesPorVariedades
 * @property-read int|null $presentaciones_por_variedades_count
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad query()
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad whereActivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad whereCodigoCatalogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad whereCodigoEan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad whereOrden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad wherePerfumeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad whereLimited($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variedad sort($sort)
 */
class Variedad extends Model
{
    use HasFactory;

    protected $table = "variedades";

    protected $fillable = [
    						'id',
                            'perfume_id',
                            'codigo_catalogo',
                            'codigo_ean',
                            'precio',
                            'orden',
                            'activo',
                            'limited'
    					  ];

    public function perfume()
    {
    	return $this->belongsTo('App\Models\Perfume');
    }

    public function presentacionesPorVariedades()
    {
    	return $this->hasMany('App\Models\PresentacionPorVariedad');
    }

    public function scopeSort($query, $sort)
    {
        switch ($sort)
        {
            case 1:
                return $query->orderBy('variedades.precio', 'ASC');
            case 2:
                return $query->orderBy('variedades.precio', 'DESC');
//            case 3:
            default:
                return $query->orderBy('ranking', 'ASC');
//            default:
//                break;
        }

    }


}
