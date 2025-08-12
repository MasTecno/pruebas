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
        Schema::create('plan_modulo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_plan");
            $table->foreign("id_plan", "fk_planes_planes")->references("id")->on("planes");
            $table->unsignedBigInteger("id_modulo");
            $table->foreign("id_modulo", "fk_planes_modulos")->references("id")->on("modulos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_modulo');
    }
};
