@extends('layouts.app3')

@section('title')
    editar producto
@endsection

@section('content')

<div class="container w-50 mt-5 rounded shadow mb-5 border border-success border-3 bg-success-subtle">
    <div class="container w-90 mt-3 rounded shadow  bg-white">
        
        <img src="{{asset('img/logo.png')}}" alt="Tu Logo" class="img-fluid mt-3" style="max-width: 50px;">
        <h2 class="fw-bold text-center   mb-3">Edita el producto:</h2>
     
        <form action="{{ route('product.update', $product) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-2">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" placeholder="Firulais" class="form-control bg-success-subtle" name="nombre"
                    value="{{ $product->nombre }}" required>
            </div><br>
            <div class="mb-2">
                <label for="descripcion" class="form-label">Descripción</label> <br>
                <textarea type="text" placeholder="Datos acerca del producto" class="form-control bg-success-subtle"
                    name="descripcion" cols="30" rows="10" required>{{ $product->descripcion }}</textarea>
            </div><br>
            <div class="mb-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" placeholder="$100" class="form-control bg-success-subtle" name="precio"
                    value="{{ $product->precio }}" required>
            </div><br>
            <div class="mb-2">
                <label for="color" class="form-label">Color</label>
                <input type="text" placeholder="Blanco" class="form-control bg-success-subtle" name="color"
                    value="{{ $product->color }}" required>
            </div><br>


            <div class="d-grid">
                <button type="submit" class="btn btn-success">Actualizar producto</button>
            </div>
            <div class="my-3">
                <p>Recuerda que esta informacion será visible para todos los usuarios</p>
            </div>
        </form>
    </div>
</div>    
@endsection
