@extends('layouts.app3')

@section('title')
    crear producto
@endsection

@section('content')
    
    <div class="container w-50  mt-5 rounded shadow mb-5 border-3 border-success">
    <h1>Formulario para crear productos</h1>

    <form class="mt-5" action="{{route('product.store')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" placeholder="correa de cuero" class="form-control bg-success-subtle" name="nombre" required>
                </div><br>
                <div class="mb-4">
                    <label for="descripcion" class="form-label">Descripción</label> <br>
                    <textarea type="text" placeholder="Datos acerca del producto" class="form-control bg-success-subtle" name="descripcion" cols="30" rows="10" required></textarea>
                </div><br>
                <div class="mb-4">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" placeholder="$100" class="form-control bg-success-subtle" name="precio" required>
                </div><br>
                <div class="mb-4">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" placeholder="Rojo" class="form-control bg-success-subtle" name="color" required>
                </div><br>
            

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Guardar producto</button>
                </div>
                <div class="my-3">
                    <p>Recuerda que esta informacion será visible para todos los usuarios</p>
                </div>
            </form>
        </div>
 @endsection