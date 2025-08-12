<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanModulo extends Model
{
    protected $table = "plan_modulo";

    protected $fillable = [
        "id_plan",
        "id_modulo"
    ];
}
