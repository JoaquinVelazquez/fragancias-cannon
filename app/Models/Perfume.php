<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

/**
 * App\Models\Perfume
 *
 * @property int $id
 * @property string $nombre
 * @property string $fragancia
 * @property int|null $linea_id
 * @property int|null $marca_id
 * @property int $is_premium
 * @property string|null $facebook
 * @property string|null $instagram
 * @property int $orden
 * @property \Illuminate\Support\Carbon|null $vreated_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Campania[] $vampania
 * @property-read int|null $vampania_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Lanzamiento[] $lanzamiento
 * @property-read int|null $lanzamiento_count
 * @property-read \App\Models\Linea|null $linea
 * @property-read \App\Models\Marca|null $marca
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Variedad[] $variedades
 * @property-read int|null $variedades_count
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume query()
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereFragancia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereIsPremium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereLineaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereMarcaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereOrden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NotaOlfativaPorPerfume[] $notasOlfativasPorPerfumes
 * @property-read int|null $notas_olfativas_por_perfumes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume active()
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume deLinea($linea)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume keyword($keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume presentacion($presentacion, $limited)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Campania[] $campania
 * @property-read int|null $campania_count
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume deMarca($marca)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfume notaOlfativa($nota)
 */
class Perfume extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'nombre', 'fragancia', 'linea_id', 'marca_id', 'is_premium', 'facebook', 'instagram'
    ];

    public function linea()
    {
        return $this->belongsTo('App\Models\Linea');
    }

    public function variedades()
    {
        return $this->hasMany('App\Models\Variedad');
    }

    public function marca()
    {
        return $this->belongsTo('App\Models\Marca');
    }

    public function lanzamiento()
    {
        return $this->hasMany('App\Models\Lanzamiento');
    }

    public function campania()
    {
        return $this->hasMany('App\Models\Campania');
    }

    public function notasOlfativasPorPerfumes()
    {
        return $this->hasMany(NotaOlfativaPorPerfume::class);
    }

    public function masVendido()
    {
        return $this->hasOne(MasVendido::class);
    }

    public function addNotaOlfativaPorNombre($nota_nombre)
    {
        $nota = NotaOlfativa::where("nombre", $nota_nombre)->first();
        if (!is_null($nota)) {
            try {
                NotaOlfativaPorPerfume::create(["perfume_id" => $this->id, "nota_olfativa_id" => $nota->id]);
            } catch (Exception $e) {
                echo 'xd';
            }
        }
    }

    public function scopeDeLinea($query, $linea)
    {
        if (!in_array($linea, [0, 4, 5])) {
            return $query->where('linea_id', $linea)
                ->where('is_premium', 0);
        } else if ($linea == 4) {
            return $query->where('is_premium', 1);
        }
    }

    public function scopeKeyword($query, $keyword)
    {
        return $query->where('nombre', 'like', '%' . $keyword . '%');
    }

    public function scopeActive($query)
    {
        $perfumes_ids_con_variedades_activas = Variedad::select('perfume_id')
            ->where('activo', 1)
            ->get()
            ->unique('perfume_id')
            ->pluck('perfume_id')
            ->toArray();

        return $query->whereIn('id', $perfumes_ids_con_variedades_activas);
    }

    public function scopePresentacion($query, $presentacion, $limited)
    {
        $v = array();
        $m = array();
        $n = array();
        foreach ($query->get() as $perfume) {
            foreach ($perfume->variedades as $var) {

                foreach ($var->presentacionesPorVariedades as $pxv) {
                    if ($this->makeCondition($pxv->presentacion_id, $presentacion, $limited, $var)) {
                        $p0 = $pxv->variedad_id;
                        break;
                    }

                }
                if (isset($p0)) {
                    array_push($v, $p0);
                    array_push($m, $var->perfume->marca_id);
                    foreach ($perfume->notasOlfativasPorPerfumes as $nota) {
                        if (!in_array($nota->nota_olfativa_id, $n)) {
                            array_push($n, $nota->nota_olfativa_id);
                        }
                    }
                    $p0 = null;
                    break;
                }
            }
        }
        return array($v, $m, $n);
    }

    public function scopeDeMarca($query, $marca)
    {
        if ($marca != 0) {
            return $query->where('marca_id', $marca);
        }
    }

    public function scopeNotaOlfativa($query, $nota)
    {
        if ($nota != 0) {
            return $query->whereHas('notasOlfativasPorPerfumes', function ($q) use ($nota) {
                $q->where('nota_olfativa_id', $nota);
            });
        }
    }

    private function makeCondition($presentacion_id, $presentacion, $limited, $variedad)
    {
        if (!$limited) {
            return ($presentacion == 2 ? $presentacion_id == 2 : $presentacion_id !== 2) && count($variedad->presentacionesPorVariedades) == 1;
        } else {
            return $variedad->limited;
        }
    }


}
