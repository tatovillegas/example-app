<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ //Metodo encargado de mostrar la pag principal
        $cursos = Curso::paginate();
              
        return view('cursos/index', compact('cursos'));
    }

    public function create(){ //Metodo encargado de mostrar el formulario para poder crear algo
        return view('cursos/create');
    }


    public function show($id){ //Meto encargado de mostrar un elemento en particular
        
        $curso = Curso::find($id);

        
        return view('cursos/show', compact('curso'));
    }
}
