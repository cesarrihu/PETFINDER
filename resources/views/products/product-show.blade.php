@extends('layouts.app3')

@section('title')
    Productos
@endsection

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Nombre: {{$product->nombre}}</h1>
                    <h2 class="card-subtitle mb-2 text-muted">Descripción: {{$product->descripcion}}</h2>
                    <h2 class="card-subtitle mb-2 text-muted">Precio: {{$product->precio}}</h2>
                    <h2 class="card-subtitle mb-2 text-muted">Color: {{$product->color}}</h2>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Volver a todos los productos</a>
                    <a href="{{ route('product.edit', $product) }}" class="btn btn-secondary">Editar producto</a>
                    
                    <!-- Formulario para borrar el producto -->
                    <form action="{{ route('product.destroy', $product) }}" method="POST" class="mt-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection