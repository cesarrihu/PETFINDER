<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetFinder-productos</title>
</head>
<body>
    <h1> <strong>Lo mejor para tus mascotas: </strong></h1>
    <ul>
        @foreach ($products as $product)
        <li>
           <a href="{{route('product.show', $product->id)}}">
           {{ $product->nombre}}
           </a>
        </li>
        @endforeach
    </ul>
</body>
</html>