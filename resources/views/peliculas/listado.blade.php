@include("includes.headers")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Listado</h1>
    <h1>{{ $titulo }}</h1>
    <?php for ($i=0; $i <= 1; $i++) { 
        echo "<h1> {$listado[$i]} </h1>";
    } ?>
    <a href="/">index</a>
    <a href="/pelicula">pelicula</a>
    <br>
    <?php echo isset($director) ? $director : "No hay director"; 
     
    ?> 
      @if($titulo && count($listado) >= 1)
         <h1>Si existe y es {{ $titulo }} y la cuenta es 2</h1>
        @else
        <h1>La condicion no se ha cumplido</h1>
        @endif 

        @for($i = 1; $i < 20; $i++)
            <h1> El numero es {{ $i }} </h1>
        @endfor

        @foreach ($listado as $peliculas)
            <h1>Las peliculas son: {{ $peliculas }}</h1>
        @endforeach
</body>

</html>

@include("includes.footer")