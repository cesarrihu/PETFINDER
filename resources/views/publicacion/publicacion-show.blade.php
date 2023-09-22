<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publicacion de {{$publicacion->nombre}}</title>
</head>
<body>
    <div>
        <h1>Nombre: {{$publicacion->nombre}}</h1>
        <h2>Raza: {{$publicacion->raza}}</h2>
        <h2>Descripción: {{$publicacion->descripcion}}</h2>
        <h2>Edad: {{$publicacion->edad}}</h2>
        <h2>Color: {{$publicacion->color}}</h2>
        <a href="{{route('publicacion.index')}}">Volver a todas las publicaciones.</a>
    </div>
</body>
</html>