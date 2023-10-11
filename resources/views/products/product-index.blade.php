@extends('layouts.app3')

@section('title')
    crear producto
@endsection

@section('content')
    
    <h1> <strong>Lo mejor para tus mascotas: </strong></h1>

        @foreach ($products as $product)
      
        <div class="card bg-success-subtle ms-1 mb-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="aqui va la imagen del producto">
            <div class="card-body-success">
              <h5 class="card-title align-content-center">{{ $product->nombre}}</h5>
              <p class="card-text align-content-center">{{ $product->descripcion}}</p>
              <a href="{{route('product.show', $product->id)}}" class="btn btn-success align-content-center">ver producto</a>
            </div>
          </div>
       
        @endforeach

@endsection

