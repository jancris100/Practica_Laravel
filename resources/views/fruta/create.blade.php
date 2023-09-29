@php
    use App\Http\Controllers\FrutaController;
@endphp



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (isset($fruta) && is_object($fruta))
        <h1>Editar fruta</h1>
    @else
        <h1>Crear una fruta</h1>
    @endif

    <form
        action={{isset($fruta) ? action([FrutaController::class,'update']) : action([FrutaController::class, 'save']) }}
        method="POST">
        {{ csrf_field() }}

        @if (isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" value="{{ $fruta->id}}">
        @endif

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ $fruta->nombre or '' }}">
        <br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" value="{{ $fruta->descripcion or '' }}">
        <br>
        <label for="precio">Precio</label>
        <input type="text" name="precio" value="{{ $fruta->precio or 0 }}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>


