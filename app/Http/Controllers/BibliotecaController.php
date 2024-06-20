<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index(){
        $bibliotecas = Biblioteca::all();
        $bibliotecas = Biblioteca::orderBy('id', 'desc')->get();
        return view('/Biblioteca.indexBiblioteca', compact('bibliotecas'));
    }

    public function create(){
        return view('/Biblioteca.createBiblioteca');
    }

    public function store(Request $request){
        $bibliotecas = new Biblioteca();
        $bibliotecas->nombre = $request->nombre;
        $bibliotecas->ubicacion = $request->ubicacion;
        $bibliotecas->descripcion = $request->descripcion;
        $bibliotecas->save();
        return redirect()->route('biblioteca.index');
    }

    public function show($biblioteca){
        $bibliotecas = Biblioteca::find($biblioteca);
        return view('/Biblioteca.showBiblioteca', compact('bibliotecas'));
    }
}
