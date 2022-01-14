<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Linea
 *
 * @property int $id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Perfume[] $perfumes
 * @property-read int|null $perfumes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Linea newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Linea newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Linea query()
 * @method static \Illuminate\Database\Eloquent\Builder|Linea whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Linea whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Linea whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Linea whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Linea extends Model
{
    use HasFactory;

    protected $fillable = [
    						'id', 'nombre'
    					  ];

    public function perfumes()
    {
    	return $this->hasMany('App\Models\Perfume');
    }
}
