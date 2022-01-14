<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Campania
 *
 * @property int $id
 * @property string $nombre
 * @property int $perfume_id
 * @property string $video_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Perfume $perfume
 * @method static \Illuminate\Database\Eloquent\Builder|Campania newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campania newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campania query()
 * @method static \Illuminate\Database\Eloquent\Builder|Campania whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campania whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campania whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campania wherePerfumeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campania whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campania whereVideoUrl($value)
 * @mixin \Eloquent
 */
class Campania extends Model
{
    use HasFactory;

    protected $fillable = [
                            'nombre',
                            'perfume_id',
                            'video_url'
                          ];

    public function perfume()
    {
        return $this->belongsTo('App\Models\Perfume');
    }
}
