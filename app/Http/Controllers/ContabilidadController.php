<?php

namespace App\Http\Controllers;

use App\Models\Indicadores;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ContabilidadController extends Controller
{
    
    public function index() {

        $usuario = session("usuario_autenticado");
        $acceso = session("modulos_autenticados");

        $database = $acceso["conta"]["database"];
        $user = $acceso["conta"]["username"];
        $password = $acceso["conta"]["password"];

        $indicadores = Indicadores::latest()->first();

        $data = [
            "email" => $usuario->email,
            "clave" => $usuario->password,
            "database" => $database,
            "user" => $user,
            "password" => $password,
            "modulo" => "contabilidad",
            "emision" => time(),
            "expiracion" => time() + 3600,
            "indicadores" => $indicadores
        ];

        $privateKeyPath = base_path("keys/private.pem");

        if (!file_exists($privateKeyPath)) {
            dd("La key no existe");
        }

        $privateKey = file_get_contents($privateKeyPath);
        $token = JWT::encode($data, $privateKey, "RS256");


        return redirect()->to("http://127.0.0.1:8001/auth/conta?token=" . urlencode($token));

    }

}
