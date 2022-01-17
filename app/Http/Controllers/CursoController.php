<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ //Metodo encargado de mostrar la pag principal
        return "Bienvenido a la pagina principal de curso";
    }

    public function create(){ //Metodo encargado de mostrar el formulario para poder crear algo
        return "Bienvenido aqui podras crear un curso";
    }

    public function show($nomCurso, $categoria = null){ //Meto encargado de mostrar un elemento en particular
        return "Bienvenido al curso: $nomCurso, de la categoria $categoria";
    }
}
