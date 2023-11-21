@extends('layouts.publicaciones')

@section('title')
    Productos
@endsection

@section('content')
    <<div class="container text-center mt-3">
        <h1 class="display-4"><strong>Lo mejor para tus mascotas:</strong></h1>
        </div>

        @foreach ($products->chunk(3) as $productChunk)
            <div class="row">
                @foreach ($productChunk as $product)
                    <div class="col-md-4">
                        <div
                            class="container w-75 mt-5 rounded shadow mb-5 border border-success border-3 bg-success-subtle d-flex justify-content-center">
                            <div class="card mt-3 mb-3 w-100">
                                <img src="http://localhost/PETFINDER/storage/app/{{$product->foto_ubicacionProd}}" class="card-img-top"
                                    alt="aqui va la imagen del producto" width="300" height="300">
                                <div class="card-header  d-flex justify-content-center">
                                    {{ $product->nombre }}
                                </div>
                                <div class="card-body  d-flex justify-content-center">
                                    <p class="card-text">Descripcion: {{ $product->descripcion }}</p>
                                </div>
                                <div class="card-body  d-flex justify-content-center">
                                    <p class="card-text"><strong>Precio: ${{ $product->precio }}</strong></p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-success">Ver
                                        producto</a>
                                    <a href="#" class="btn ms-1 btn-primary">comprar producto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    @endsection
