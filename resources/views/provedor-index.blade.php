@extends('layouts.publicaciones')

@section('title')
    Provedores
@endsection

@section('content')

    <h1>Listado de Provedores</h1>

    <ul class="list-group">
        @foreach ($provedores as $provedor)
        <li class="list-group-item list-group-item-success">
                {{ $provedor->provedorNombre }}
                <ul> 
                    <h5>Productos que pertenecen a este provedor:</h5>   
                    @foreach ($provedor->productos as $product)
                    <li>
                            <a href="{{ route('product.show', $product->id) }}">{{$product->nombre}}</a>
                        </li>
                    @endforeach
                </ul>
            
            </li>
        @endforeach
    </ul>
@endsection