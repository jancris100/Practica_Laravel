<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrutaController;
use App\Http\Controllers\PeliculaControl;
use App\Http\Controllers\PeliculaController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get("/peliculas", [PeliculaController::class,"index"]);

Route::get("/peliculas/detalle/{year?}", [PeliculaController::class,"detalle"])
->middleware("testYear");

Route::get("/peliculas/formulario", [PeliculaController::class,"formulario"]);
Route::post("/peliculas/recibir", [PeliculaController::class,"recibir"]);

//rutas frutas
Route::group(["prefix"=>"frutas"], function(){
  Route::get("index", [FrutaController::class,"index"]);
  Route::get("descripcion/{id}", [FrutaController::class,"descripcion"]);
  Route::get("crear", [FrutaController::class,"create"]);
  Route::post("save", [FrutaController::class,"save"]);
  Route::get("delete/{id}", [FrutaController::class,"delete"]);
  Route::get("edit/{id}", [FrutaController::class,"edit"]);
  Route::post("update", [FrutaController::class,"update"]);
});
/*
Route::get('/mostrar', function () {
    $titulo = "Mostrar titulo";
    return view('mostrar', array(
        "titulo" => $titulo
    ));
});

Route::get('/pelicula/{titulo?}', function ($titulo = "No hay pelicula seleccionada") {
    return view('pelicula', array(
        "titulo" => $titulo
    ));
})->where(
    array(
        "titulo" => "[a-z]+"
    )
);


Route::get('/listado', function () {
    $titulo = "Listado de peliculas";
    $listado = array("batman","superman");
    return view('peliculas.listado')
    ->with("titulo",$titulo)
    ->with("listado",$listado);
});


Route::get('/pagina', function () {
    return view('pagina');
});
*/