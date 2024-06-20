<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\CopiaLibro;
use App\Models\Estanteria;
use App\Models\Libro;
use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LibroController extends Controller
{
    //

    public function index(Request $request){
        $estanteriaId = $request->input('estanteria');
        $estanteria = Estanteria::find($estanteriaId);
        $libros = Libro::where('estanteria_id', $estanteriaId)->get();
        $copiaLibros = CopiaLibro::where('estanteria_id', $estanteriaId)->get();
        return view('/Libro.indexLibro', compact('estanteria', 'libros', 'copiaLibros'));
    }

    public function create(Request $request){
        $estanteriaId = $request->query('estanteria');
        $estanteria = Estanteria::findOrFail($estanteriaId);
        $autors = Autor::all();
        return view('/Libro.createLibro', compact('estanteria', 'autors'));
    }

    public function store(Request $request){
        $libro = new Libro();
    
        $libro->nombre = $request->nombre;
        $libro->fechaPubli = $request->fechaPubli;
        $libro->autor_id = $request->autor_id;
        $libro->estanteria_id = $request->estanteria_id;
        $libro->save();

        return redirect()->route('libro.index', ['estanteria' => $request->estanteria_id]);
    }

    public function show($libro){
        $libro = Libro::findOrFail($libro);
        return view('/Libro.showLibro', compact('libro'));
    }

}
