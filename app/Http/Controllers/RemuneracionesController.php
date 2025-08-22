<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class RemuneracionesController extends Controller
{
    
    public function index() {
        $usuario = session("usuario_autenticado");
        $acceso = session("modulos_autenticados");

        $database = $acceso["remu"]["database"];
        $user = $acceso["remu"]["username"];
        $password = $acceso["remu"]["password"];

        $data = [
            "email" => $usuario->email,
            "clave" => $usuario->password,
            "database" => $database,
            "user" => $user,
            "password" => $password,
            "modulo" => "remuneraciones",
            "emision" => time(),
            "expiracion" => time() + 3600
        ];

        $privateKeyPath = base_path("keys/private.pem");

        if (!file_exists($privateKeyPath)) {
            dd("La key no existe");
        }

        $privateKey = file_get_contents($privateKeyPath);
        $token = JWT::encode($data, $privateKey, "RS256");


        return redirect()->to("http://127.0.0.1:8002/auth/remu?token=" . urlencode($token));
    
    }

}
