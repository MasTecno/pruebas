<?php

namespace Database\Seeders;

use App\Models\Modulo;
use App\Models\Plan;
use App\Models\PlanModulo;
use App\Models\ServerConexiones;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Modulo::insert([
        //     ["nombre" => "Contabilidad", "created_at" => now(), "updated_at" => now()],
        //     ["nombre" => "Remuneraciones", "created_at" => now(), "updated_at" => now()],
        //     ["nombre" => "Renta", "created_at" => now(), "updated_at" => now()],
        // ]);

        // Plan::insert([
        //     ["nombre" => "Plan Contable", "descripcion" => "Plan Contabilidad", "created_at" => now(), "updated_at" => now()],
        //     ["nombre" => "Plan Remu", "descripcion" => "Plan Remuneraciones", "created_at" => now(), "updated_at" => now()],
        //     ["nombre" => "Plan Renta", "descripcion" => "Plan Renta", "created_at" => now(), "updated_at" => now()],
        //     ["nombre" => "Plan Total", "descripcion" => "Plan Conta + Renta", "created_at" => now(), "updated_at" => now()]
        // ]);

        // PlanModulo::insert([
        //     ["id_plan" => 4, "id_modulo" => 4, "created_at" => now(), "updated_at" => now()],
        //     ["id_plan" => 5, "id_modulo" => 5, "created_at" => now(), "updated_at" => now()],
        //     ["id_plan" => 6, "id_modulo" => 6, "created_at" => now(), "updated_at" => now()],
        //     ["id_plan" => 7, "id_modulo" => 4, "created_at" => now(), "updated_at" => now()],
        //     ["id_plan" => 7, "id_modulo" => 5, "created_at" => now(), "updated_at" => now()],
        //     ["id_plan" => 7, "id_modulo" => 6, "created_at" => now(), "updated_at" => now()],
        // ]);

        // User::insert([
        //     [
        //         "uuid" => Str::uuid(),
        //         "nombre" => "server01",
        //         "alias" => "20368311-1",
        //         "base" => "masconta_server01",
        //         "usuario" => "masconta_serverUs01",
        //         "password" => "V9mL!q2Z@rXe81bP",
        //         "id_plan" => 4,
        //         "estado" => "A",
        //         "created_at" => now(),
        //         "updated_at" => now(),
        //     ]
        // ]);

        // ServerConexiones::insert([
        //     ["id_server" => 2, "id_modulo" => 4, "alias" => "server01_conta1", "base" => "server01_conta1", "usuario" => "usuario1", "password" => 1234, "created_at" => now(), "updated_at" => now()],
        //     ["id_server" => 2, "id_modulo" => 5, "alias" => "server01_remu1", "base" => "server01_remu1", "usuario" => "usuario1", "password" => 1234, "created_at" => now(), "updated_at" => now()],
        //     ["id_server" => 2, "id_modulo" => 6, "alias" => "server01_renta1", "base" => "server01_renta1", "usuario" => "usuario1", "password" => 1234, "created_at" => now(), "updated_at" => now()],
        // ]);

    }
}
