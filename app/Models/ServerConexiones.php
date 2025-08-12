<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerConexiones extends Model
{
    public function servidor() {
        return $this->belongsTo(User::class, "id_server");
    }

    public function modulo() {
        return $this->belongsTo(Modulo::class, "id_modulo");
    }
}
