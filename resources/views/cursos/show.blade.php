@extends('layouts.plantilla')

@section('title', 'Curso' . $nomCurso . $categoria)

@section('content')
    <h1><?php
    if($categoria){
        echo "Bienvenido al curso: $nomCurso, de la categoria $categoria";
    }else{
        echo "Bienvenido al curso: $nomCurso";
    }
    ?></h1>
@endsection