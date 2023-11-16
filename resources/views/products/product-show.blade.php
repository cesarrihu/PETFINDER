@extends('layouts.app3')

@section('title')
    Producto-{{$product->nombre}}
@endsection

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container w-100 rounded shadow mb-5 border border-success border-3 bg-success-subtle d-flex justify-content-center">
                <div class="card-body bg-white mt-3 mb-3">
                    <div class="container mt-5 mb-5">
                        <img src="{{ asset('img/image_3.jpg') }}" class="card-img-top"
                        alt="aqui va la imagen de la mascota">
                    </div>
                    <h1 class="card-title d-flex justify-content-center">Nombre: {{$product->nombre}}</h1>
                    <h2 class="card-subtitle mb-2 d-flex justify-content-center">Descripción: {{$product->descripcion}}</h2>
                    <h2 class="card-subtitle mb-2 d-flex justify-content-center">Precio: ${{$product->precio}}</h2>
                    <h2 class="card-subtitle mb-5 d-flex justify-content-center">Color: {{$product->color}}</h2>
                    <div class="container w-100 mb-3">
                        <div class="card-foteer d-flex justify-content-center ms-5">
                     
                            <div class="col-4 ms-5">
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Volver a todos los productos</a>
                </div>
                @if(Auth::user()->tipo == 'admin')
                    <div class="col-4">
                    <a href="{{ route('product.edit', $product) }}" class="btn btn-secondary">Editar producto</a>
                    </div>
                @endif
                    @if(Auth::user()->tipo == 'admin')
                    <div class="col-4 ">
                    <form action="{{ route('product.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Borrar</button>
                    </form>
                </div>
                @endif
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection