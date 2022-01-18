<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ //Metodo encargado de mostrar la pag principal
        return view('cursos/index');
    }

    public function create($nomCurso){ //Metodo encargado de mostrar el formulario para poder crear algo
        return view('cursos/create', ['nomCurso' => $nomCurso]);
    }


    public function show($nomCurso, $categoria = null){ //Meto encargado de mostrar un elemento en particular
        return view('cursos/show', ['nomCurso' => $nomCurso, 'categoria' => $categoria]);
    }
}
