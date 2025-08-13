<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use App\Models\PlanModulo;
use App\Models\ServerConexiones;
use App\Models\User;
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

        $union =  DB::connection("toribio")->table("users")
        ->where("nombre", $request->servidor)->first();

        if (!$union) {
            // return response()->json([
            //     "error" => true,
            //     "message" => "No se encontro el servidor"
            // ], 404);

            return back()->with("error", "Credenciales incorrectas");
        }

        $columnas = DB::connection("toribio")->select("
            SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME = 'users'
            AND COLUMN_NAME LIKE 'nom_bd_%'
        ");

        $sufijos = [];
        foreach ($columnas as $col) {
            $nombre = str_replace("nom_bd_", "", $col->COLUMN_NAME);
            $sufijos[] = $nombre;
        }

        // dd($sufijos);

        $configs = [];
        foreach ($sufijos as $sufijo) {
            if (empty($union->{"nom_bd_" . $sufijo})) {
                continue;
            }

            $configs[$sufijo] = [
                "driver"    => "mysql",
                "host"      => "127.0.0.1",
                "port"      => "3306",
                "database"  => $union->{"nom_bd_" . $sufijo},
                "username"  => $union->usuario_bd,
                "password"  => $union->password_bd,
                "charset"   => "utf8mb4",
                "collation" => "utf8mb4_unicode_ci",
                "prefix"    => "",
            ];
        }

        session(["unionServer" => $union]);

        //* Limpiar conexiones anteriores en caso de existir

        $usuario_autenticado = null;
        foreach ($configs as $sufijo => $config) {      
            DB::purge("cliente_{$sufijo}");
            config(["database.connections.cliente_{$sufijo}" => $config]);

            session(["{$sufijo}" => $config]);

            $usuario = DB::connection("cliente_{$sufijo}")
            ->table("usuarios")
                ->where("email", $request->email)
                ->where("password", $request->password)
            ->first();

            if($usuario) {
                $usuario_autenticado = $usuario;
                break;
            }
        }

        if (!$usuario_autenticado) {
            // return response()->json([
            //     "success" => false,
            //     "message" => "Credenciales incorrectas"
            // ], 403);
            return back()->with("error", "Credenciales incorrectas");
        }

        session([
            "usuario_autenticado" => $usuario_autenticado
        ]);


        return redirect()->route("dashboard");

    }
}
