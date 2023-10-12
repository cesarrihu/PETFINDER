@extends('layouts.app3')

@section('title')
    Publicacion de {{$publicacion->nombre}}
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

                    <h1 class="card-title  d-flex justify-content-center">Nombre: {{$publicacion->nombre}}</h1>
                    <h2 class="card-subtitle mt-2 mb-2  d-flex justify-content-center ms-3">Descripción: {{$publicacion->descripcion}}</h2>
                    <h2 class="card-subtitle mb-2 d-flex justify-content-center">Color: {{$publicacion->color}}</h2>
                    <h2 class="card-subtitle mb-2 d-flex justify-content-center">Raza: {{$publicacion->raza}}</h2>
                    <h2 class="card-subtitle mb-2 d-flex justify-content-center mb-5">Edad: {{$publicacion->edad}}</h2>
                    <div class="container">
                        <div class=" card-footer d-flex justify-content-center ms-5">
                            <div class="col-4 ms-5">
                                <a href="{{ route('publicacion.index') }}" class="btn btn-primary">Volver a las publicaciones</a>
                            </div>

                            <div class="col-4">
                                <a href="{{route('publicacion.edit', $publicacion)}}" class="btn btn-secondary">Editar publicacion</a>
                            </div>

                            <div class="col-4">
                                <!-- Formulario para borrar la publicación -->
                                <form action="{{ route('publicacion.destroy', $publicacion) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mb-4">Borrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
