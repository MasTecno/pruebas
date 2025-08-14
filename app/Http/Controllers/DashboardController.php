<?php

namespace App\Http\Controllers;

use App\Models\Indicadores;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index() {

        $ultimo = Indicadores::latest()->first();
        $ahora = Carbon::now();
    
        if ($ultimo && $ultimo->created_at->diffInMinutes($ahora) < 600) {
            $indicadores = $ultimo;
        } else {
            $response = Http::get("https://mindicador.cl/api");
    
            if ($response->successful()) {
                $data = $response->json();
                    
                // if ($ultimo) {
                //     $ultimo->delete();
                // }
    
                $indicadores = Indicadores::create([
                    "dolar" => $data["dolar"]["valor"],
                    "euro" => $data["euro"]["valor"],
                    "uf" => $data["uf"]["valor"],
                    "utm" => $data["utm"]["valor"],
                    "ipc" => $data["ipc"]["valor"],
                    "ivp" => $data["ivp"]["valor"],
                    "imacec" => $data["imacec"]["valor"],
                ]);
            } else {
                $indicadores = $ultimo;
            }
        }

        session(["indicadores" => $indicadores]);

        return view("dashboard", compact("indicadores"));
    }
}
