<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TemaController extends Controller
{
    public function create(){
        return view('/Tema.tema');
    }

    public function store(Request $request){
        $tema = new Tema();
        $tema->nombre = $request-> nombre;
        $tema->color = $request-> color;
        $tema->save();

        return redirect()->route('biblioteca.index');
    }
}
