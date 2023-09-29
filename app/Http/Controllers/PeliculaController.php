<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PeliculaController extends Controller
{
    public function index(){
        $titulo = "Listado de mis peliculas controller";
        return view("pelicula.index",["titulo" => $titulo]);
    }
    public function detalle($year = null){
        return view("pelicula.detalle");
    }

    public function formulario(){
        return view("pelicula.formulario");
    }

    public function recibir(Request $request){
        $nombre = $request->input("nombre");
        $email = $request->input("email");
        var_dump($nombre);
        var_dump($email);
        die();
    }
}
