<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Marca
 *
 * @property int $id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Perfume[] $perfumes
 * @property-read int|null $perfumes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Marca newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marca newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marca query()
 * @method static \Illuminate\Database\Eloquent\Builder|Marca whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marca whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marca whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marca whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Marca extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'nombre'
    ];

    public function perfumes()
    {
        return $this->hasMany('App\Models\Perfume');
    }

    public function getActivas()
    {

        $marcas_id_con_variedades_activas = Perfume::select(['linea_id', 'marca_id', 'is_premium'])
                                                   ->whereHas('variedades', function ($query) {
                                                       $query->where('activo', 1);
                                                   })
                                                   ->distinct('marca_id');

        return $marcas_id_con_variedades_activas;

    }

    public function getMarcas($marcas_id)
    {
        return Marca::whereIn('id', $marcas_id)->get();
    }



}
