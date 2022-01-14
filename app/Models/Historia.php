<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    #use HasFactory;

    protected $table = "historia";

    protected $fillable = [
    						'id', 'texto'
    					  ];
}