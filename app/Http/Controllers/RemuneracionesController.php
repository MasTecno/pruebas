<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemuneracionesController extends Controller
{
    
    public function index() {
        return view("remu.index");
    }

}
