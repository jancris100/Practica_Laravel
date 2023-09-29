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
    @if (session("status"))
        <p style="background-color: green">  {{ session("status") }}
        </p>
      
    @endif
    <h1>Listado de frutas</h1>
    <ul>
        @foreach ($frutas as $fruta)
            <li>
                {{ $fruta->nombre }}</li>
                <a href="{{ action([FrutaController::class,"descripcion"],['id'=>$fruta->id]) }}">enlace detalle</a>
                <a href="{{ action([FrutaController::class,"update"],['id'=>$fruta->id]) }}">Update</a>
                <a href="{{ action([FrutaController::class,"delete"],['id'=>$fruta->id]) }}">Eliminar</a>
        @endforeach
    </ul>
</body>
</html>