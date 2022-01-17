<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function(){
    #return view('welcome');
    return "Bienvenido a la pagina principal";
}); */

/* Creando una ruta 
Route::get('cursos', function(){
    return "Bienvenido al curso";
});
*/

/*creando una ruta pasando una variable por url

Route::get('cursos/{nomCurso}', function($nomCurso) {
    return "Bienvenido al curso: $nomCurso";
});  

creando una ruta pasando dos variables por url
Route::get('cursos/{nomCurso}/{categoria}', function($nomCurso, $categoria) {
    return "Bienvenido al curso: $nomCurso, de la categoria $categoria";
});
*/

/*Creando una unica ruta con una variable opcional

Route::get('cursos/{nomCurso}/{categoria?}', function($nomCurso, $categoria = null){
    if($categoria){
        return "Bienvenido al curso: $nomCurso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $nomCurso";
    }
}); 
*/

//Ruta con un controlador

Route::get('/', HomeController::class);

Route::get('curso', [CursoController::class, 'index']);

Route::get('cursos/{nomCurso}', [CursoController::class, 'create']);

Route::get('cursos/{nomCurso}/{categoria?}', [CursoController::class, 'show']); 