<?php

namespace Database\Seeders;

use App\Models\Modulo;
use App\Models\Plan;
use App\Models\PlanModulo;
use App\Models\ServerConexiones;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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


        DB::table("users")->insert([
            [
                "uuid" => Str::uuid(),
                "nombre" => "server02",
                "rut" => "13906244-4",
                "usuario_bd" => "root",
                "password_bd" => "root",
                "nom_bd_conta" => "conta02",
                "nom_bd_remu" => "remu02",
                "nom_bd_renta" => "renta02",
                "estado" => "A",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);

    }
}
