<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index() {
        return view("index");    
    }

    public function store(Request $request) {

        $request->validate([
            "servidor" => ["required"],
            "email" => ["required"],
            "password" => ["required"]
        ]);

        $union = DB::connection("pruebas_laravel")
        ->table("users")
        ->where("nombre", $request->servidor)
        ->first();

        if (!$union) {
            return response()->json([
                "error" => true,
                "message" => "Servidor no encontrado"
            ], 404);
        }

        // dd($union);
        session(["unionServer" => $union]);

        $config = [
            "driver"    => "mysql",
            "host"      => "127.0.0.1",
            "port"      => "3306",
            "database"  => $union->base,
            "username"  => "root",
            "password"  => "root",
            "charset"   => "utf8mb4",
            "collation" => "utf8mb4_unicode_ci",
            "prefix"    => "",
        ];

        session(["serverCliente" => $config]);

        //* Limpiar conexiones anteriores en caso de existir
        DB::purge("cliente_actual");
        config(["database.connections.cliente_actual" => $config]);

        $usuario = DB::connection("cliente_actual")
            ->table("usuarios")
            ->where("email", $request->email)
            ->where("password", $request->password)
            ->first();

        if (!$usuario) {
            return response()->json([
                "success" => false,
                "message" => "Credenciales incorrectas"
            ], 404);
        }

        session(["usuario_autenticado" => $usuario]);

        return redirect()->route("dashboard");

    }
}
