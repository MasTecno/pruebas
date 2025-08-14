<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicadores extends Model
{
    protected $fillable = [
        "dolar",
        "euro",
        "uf",
        "utm",
        "ipc",
        "ivp",
        "imacec",
        "created_at",
        "updated_at"
    ];
}
