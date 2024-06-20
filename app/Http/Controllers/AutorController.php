<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index(){
        return "no lo uso por ahora";
    }

    public function create(){
        return view('/Autor.autor');
    }

    public function store(Request $request){
        $autor= new Autor();
        $autor -> nombre = $request-> nombre;
        $autor-> descripcion = $request-> descripcion;
        $autor->save();
        return redirect()->route('biblioteca.index');
    }
}
