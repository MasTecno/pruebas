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
        Schema::create('indicadores', function (Blueprint $table) {
            $table->id();
            $table->decimal("dolar", 10, 2);
            $table->decimal("euro", 10, 2);
            $table->decimal("uf", 10, 2);
            $table->decimal("utm", 10, 2);
            $table->decimal("ipc", 10, 2);
            $table->decimal("ivp", 10, 2);
            $table->decimal("imacec", 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indicadores');
    }
};
