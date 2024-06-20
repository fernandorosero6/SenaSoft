<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BibliotecaController extends Controller
{
    public function index(){
        $bibliotecas = Biblioteca::where('user_id', Auth::id())->orderBy('id', 'desc')->get();

        // Retornar la vista con las bibliotecas filtradas
        return view('Biblioteca.indexBiblioteca', compact('bibliotecas'));
    }

    public function create(){
        return view('/Biblioteca.createBiblioteca');
    }

    public function store(Request $request){
        $bibliotecas = new Biblioteca();
        $bibliotecas->nombre = $request->nombre;
        $bibliotecas->ubicacion = $request->ubicacion;
        $bibliotecas->descripcion = $request->descripcion;
        $bibliotecas->user_id = Auth::id();
        $bibliotecas->save();
        return redirect()->route('biblioteca.index');
    }

    public function show($biblioteca){
        $bibliotecas = Biblioteca::find($biblioteca);
        return view('/Biblioteca.showBiblioteca', compact('bibliotecas'));
    }
}
