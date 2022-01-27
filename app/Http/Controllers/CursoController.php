<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){ //Metodo encargado de mostrar la pag principal
        $cursos = Curso::orderBy('id', 'desc')->paginate();
              
        return view('cursos.index', compact('cursos'));
    }

    public function create(){ //Metodo encargado de mostrar el formulario para poder crear algo
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        /*            
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso-> save(); */


        $curso = Curso::create($request -> all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){ //Metodo encargado de mostrar un elemento en particular
        
        return view('cursos.show', compact('curso'));
    }

    public function edit(curso $curso){
        return view('cursos.edit', compact('curso'));
    }  

    public function update(request $request, curso $curso){
        $request->validate([
            'name'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required',
        ]);


        /*$curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        */

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

}
