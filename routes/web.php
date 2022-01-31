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

/*
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show'); 

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

*/

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');