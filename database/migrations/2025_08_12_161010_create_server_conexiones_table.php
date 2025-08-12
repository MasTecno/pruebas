<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('server_conexiones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_server");
            $table->foreign("id_server", "fk_servidores_servers")->references("id")->on("users");
            $table->unsignedBigInteger("id_modulo");
            $table->foreign("id_modulo", "fk_servidores_modulos")->references("id")->on("modulos");
            $table->string("alias");
            $table->string("base");
            $table->string("usuario");
            $table->string("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_conexiones');
    }
};
