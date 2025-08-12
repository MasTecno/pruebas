<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = "planes";

    protected $fillable = [
        "nombre",
        "descripcion"
    ];

    //* En users tengo muchos servidores que apuntan a id_plan, fk de la tabla servidores (users)
    public function servidores() {
        return $this->hasMany(User::class, "id_plan");
    }

    //* Muchos a muchos, referencia al modelo actual y al modelo de modulos
    public function modulos() {
        return $this->belongsToMany(Modulo::class, "plan_modulo", "id_plan", "id_modulo");
    }
}
