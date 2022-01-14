<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Presentacion
 *
 * @property int $id
 * @property string $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PresentacionPorVariedad[] $presentacionesPorVariedades
 * @property-read int|null $presentaciones_por_variedades_count
 * @method static \Illuminate\Database\Eloquent\Builder|Presentacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Presentacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Presentacion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Presentacion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentacion whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentacion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentacion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Presentacion extends Model
{
    use HasFactory;

    protected $table = "presentaciones";

    protected $fillable = [
    						'id', 'descripcion'
    					  ];

    public function presentacionesPorVariedades()
    {
    	return $this->hasMany('App\Models\PresentacionPorVariedad');
    }
}
