<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\NotaOlfativaPorPerfume
 *
 * @property int $id
 * @property int $perfume_id
 * @property int $nota_olfativa_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\NotaOlfativa $notaOlfativa
 * @property-read \App\Models\Perfume $perfume
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativaPorPerfume newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativaPorPerfume newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativaPorPerfume query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativaPorPerfume whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativaPorPerfume whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativaPorPerfume whereNotaOlfativaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativaPorPerfume wherePerfumeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativaPorPerfume whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NotaOlfativaPorPerfume extends Model
{
    use HasFactory;

    protected $table = "notas_olfativas_x_perfumes";

    protected $fillable = [
        "perfume_id",
        "nota_olfativa_id"
        ];

    public function notaOlfativa()
    {
        return $this->belongsTo(NotaOlfativa::class);
    }

    public function perfume()
    {
        return $this->belongsTo(Perfume::class);
    }

}
