<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
  public function index()
  {
    $frutas = DB::table("frutas")->orderBy('id', 'desc')->get();
    return view("fruta.index", [
      "frutas" => $frutas
    ]);
  }

  public function descripcion($id)
  {
    $frutas = DB::table("frutas")->where("id", "=", $id)->first();
    return view("fruta.descripcion", [
      "frutas" => $frutas
    ]);
  }

  public function create()
  {
    return view("fruta.create");
  }

  public function save(Request $request)
  {
    $fruta = DB::table("frutas")->insert([
      'nombre' => $request->input("nombre"),
      "descripcion" => $request->input("descripcion"),
      "precio" => $request->input("precio"),
      "fecha" => date("Y-m-d")
    ]);
    return redirect()->action([FrutaController::class, "index"])
      ->with("status", "fruta borrada correctamente");
  }


  public function delete($id)
  {
    $fruta = DB::table("frutas")->where("id", "=", $id)->delete();
    return redirect()->action([FrutaController::class, "index"])
      ->with("status", "fruta borrada correctamente");
  }

  public function edit($id)
  {

    $fruta = DB::table("frutas")->where("id", "=", $id)->first();
    return view("fruta.create", [
      "fruta" => $fruta
    ]);
  }
  public function update(Request $request)
  {
        $id = $request -> input("id");
        $fruta = DB::table("frutas")->where("id", "=", $id)->update([
          "nombre" => $request -> input("nombre"),
          "descripcion" => $request -> input("descripcion"),
          "precio" => $request -> input("precio")
        ]);
        return redirect()->action([FrutaController::class, "index"])
        ->with("status", "fruta actualizada correctamente");
  }

}
