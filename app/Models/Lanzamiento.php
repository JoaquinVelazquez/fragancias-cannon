<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Lanzamiento
 *
 * @property int $id
 * @property string $nombre
 * @property int $orden
 * @property int $perfume_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Perfume $perfume
 * @method static \Illuminate\Database\Eloquent\Builder|Lanzamiento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lanzamiento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lanzamiento query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lanzamiento whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lanzamiento whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lanzamiento whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lanzamiento whereOrden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lanzamiento wherePerfumeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lanzamiento whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Lanzamiento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'orden', 'perfume_id'];

    public function perfume()
    {
    	return $this->belongsTo('App\Models\Perfume');
    }
}
