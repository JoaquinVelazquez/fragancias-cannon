<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ImagenCarousel
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $titulo
 * @property string|null $descripcion
 * @property int $orden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel whereOrden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImagenCarousel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ImagenCarousel extends Model
{
    use HasFactory;

    protected $table = "imagenes_carousel";

    protected $fillable = ['nombre', 'link', 'orden'];
    
}
