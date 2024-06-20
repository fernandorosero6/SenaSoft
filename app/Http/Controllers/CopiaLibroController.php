<?php

namespace App\Http\Controllers;

use App\Models\CopiaLibro;
use App\Models\Estanteria;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

use function Ramsey\Uuid\v1;

class CopiaLibroController extends Controller
{
    public function create(Request $request){
        $estanteriaId = $request->input('estanteria');
        $estanteria = Estanteria::findOrFail($estanteriaId);
        return view('/CopiaLibro.createCopiaLibro', compact('estanteria'));
    }

    public function store(Request $request){
        $copiaLibro = new CopiaLibro();
        $copiaLibro->estanteria_id = $request ->estanteria_id;
        $copiaLibro->nombre = $request->nombre;
        $copiaLibro->numeroCopia = $request->numeroCopia;
        $copiaLibro->autor = $request->autor;
        $copiaLibro->save();

        return redirect()->route('libro.index', ['estanteria' => $request->estanteria_id]);
    }

    public function show($copiaLibro){
        $copiaLibro = CopiaLibro::findOrFail($copiaLibro);
        return view('/CopiaLibro.showCopiaLibro', compact('copiaLibro'));
    }
}
