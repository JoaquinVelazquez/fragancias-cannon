<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasVendido extends Model
{
    use HasFactory;

    protected $fillable = ['perfume_id', 'orden'];

    public function perfume()
    {
        return $this->belongsTo(Perfume::class);
    }
}
