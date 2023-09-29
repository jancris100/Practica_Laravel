
@php
 use App\Http\Controllers\PeliculaController;
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
    <h1>Formulario en Laravel</h1>
    <form action="{{ action([PeliculaController::class,"recibir"]) }}" method="POST">
        {{ csrf_field() }};
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
         <br>
        <label for="email">Correo</label>
        <input type="email" name="email">
         <br>
        <input type="submit" value="enviar">

    </form>
</body>
</html>