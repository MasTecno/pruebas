<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CrearServersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "uuid" => Str::uuid(),
                "nombre" => "server01",
                "alias" => "20368311-1",
                "base" => "masconta_server01",
                "usuario" => "masconta_serverUs01",
                "password" => "V9mL!q2Z@rXe81bP",
                "estado" => "A",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
