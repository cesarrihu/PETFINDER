<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PetFinder-{{$product->nombre}}</title>
</head>
<body>
    <div>
        <h1>Nombre: {{$product->nombre}}</h1>
        <h2>Descripción: {{$product->descripcion}}</h2>
        <h2>Precio: {{$product->precio}}</h2>
        <h2>Color: {{$product->color}}</h2>
        <a href="{{route('product.index')}}">Volver a todos los productos.</a> <br>
        <a href="{{route('product.edit', $product)}}">Editar producto.</a>
        <a href="">
            <Form action="{{route('product.destroy', $product)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="Submit"value="Borrar">
            </Form>
        </a>
    </div>
</body>
</html>