<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PresentacionPorVariedad
 *
 * @property int $presentacion_id
 * @property int $variedad_id
 * @property int $vap
 * @property string $medida
 * @property int $vol
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Presentacion $presentacion
 * @property-read \App\Models\Variedad $variedad
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad query()
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad whereMedida($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad wherePresentacionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad whereVap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad whereVariedadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentacionPorVariedad whereVol($value)
 * @mixin \Eloquent
 */
class PresentacionPorVariedad extends Model
{
    use HasFactory;

    protected $table = "presentaciones_x_variedades";

    protected $fillable = [
    						'id', 'presentacion_id', 'variedad_id', 'vap', 'medida', 'vol'
    					  ];

    public $incrementing = false;

    public function presentacion()
    {
    	return $this->belongsTo('App\Models\Presentacion');
    }

    public function variedad()
    {
    	return $this->belongsTo('App\Models\Variedad');
    }



}
