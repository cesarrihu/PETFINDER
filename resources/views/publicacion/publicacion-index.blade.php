<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petfinder-publicaciones</title>
</head>
<body>
    <h1> <strong>Mascotas en busqueda de un hogar: </strong></h1>
    <ul>
        @foreach ($publicaciones as $publicacion)
        <li>
           <a href="{{route('publicacion.show', $publicacion->id)}}">
           {{ $publicacion->nombre}}
           </a>
        </li>
        @endforeach
    </ul>
</body>
</html>
