<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ //Invoke administra una unica ruta
        return "Bienvenido al la pagina a traves del controlador";
    }

}