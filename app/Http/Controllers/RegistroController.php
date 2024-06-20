<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RegistroController extends Controller
{
    public function index(){
        return view('/RegistroLogin.registro');
    }

    public function store(Request $request){
        $registro = new Registro();
        $registro->nombre = $request -> nombre;
        $registro->email = $request-> email;
        $registro->contraseña = $request-> contraseña;
        $registro->confirmacionContraseña = $request-> confirmacionContraseña;
        $registro->save();

        return view('/RegistroLogin.registro');
    }
}
