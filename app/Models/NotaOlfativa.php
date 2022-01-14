<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\NotaOlfativa
 *
 * @property int $id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NotaOlfativaPorPerfume[] $addNotaOlfativaPorNombre
 * @property-read int|null $add_nota_olfativa_por_nombre_count
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativa query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativa whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotaOlfativa whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NotaOlfativa extends Model
{
    use HasFactory;

    protected $table = "notas_olfativas";

    protected $fillable = ["nombre"];

    public function addNotaOlfativaPorNombre()
    {
        return $this->hasMany(NotaOlfativaPorPerfume::class);
    }

}
