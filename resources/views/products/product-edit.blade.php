<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petfinder-editar-producto</title>
</head>
<body>
    <h1>Formulario para editar productos</h1>

    <form action="{{route('product.update', $product)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" placeholder="Firulais" class="form-control bg-success-subtle" name="nombre"  value="{{$product->nombre}}" required>
                </div><br>
                <div class="mb-4">
                    <label for="descripcion" class="form-label">Descripción</label> <br>
                    <textarea type="text" placeholder="Datos acerca del producto" class="form-control bg-success-subtle" name="descripcion" cols="30" rows="10" required>{{$product->descripcion}}</textarea>
                </div><br>
                <div class="mb-4">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" placeholder="$100" class="form-control bg-success-subtle" name="precio" value="{{$product->precio}}" required>
                </div><br>
                <div class="mb-4">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" placeholder="Blanco" class="form-control bg-success-subtle" name="color" value="{{$product->color}}" required>
                </div><br>
            

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Actualizar producto</button>
                </div>
                <div class="my-3">
                    <p>Recuerda que esta informacion será visible para todos los usuarios</p>
                </div>
            </form>
</body>
</html>