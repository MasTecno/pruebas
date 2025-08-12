<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table = "modulos";

    protected $fillable = [
        "nombre"
    ];

    //* Muchos a muchos
    public function planes() {
        return $this->belongsToMany(Plan::class, "plan_modulo", "id_modulo", "id_plan");
    }
}
