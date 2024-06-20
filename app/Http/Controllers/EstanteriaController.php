<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Biblioteca;
use App\Models\Estanteria;
use App\Models\Tema;
use Faker\Provider\Biased;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EstanteriaController extends Controller
{
    public function index(Request $request){
        $bibliotecaId = $request->input('biblioteca');
        $biblioteca = Biblioteca::find($bibliotecaId);
        $estanterias = Estanteria::where('biblioteca_id', $bibliotecaId)->get();
        return view('/Estanteria.indexEstanteria', compact('biblioteca', 'estanterias'));
    }

    public function create(Request $request){

        $bibliotecaId = $request->query('biblioteca');
        $temas = Tema::all();
        $biblioteca = Biblioteca::findOrFail($bibliotecaId);
        return view('/Estanteria.createEstanteria', compact('temas', 'biblioteca'));
    }


    public function store(Request $request){
        $estanteria = new Estanteria();
        $estanteria->nombre = $request->nombre;
        $estanteria->codigo = $request->codigo;
        $estanteria->biblioteca_id = $request->biblioteca_id;
        $estanteria->tema_id = $request-> tema_id;
        $estanteria->save();

        return redirect()->route('biblioteca.index');
    }

    public function show($biblioteca){

    }
}
