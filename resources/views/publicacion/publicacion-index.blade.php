  @extends('layouts.publicaciones')

@section('title')
    Publicaciones
@endsection

@section('content')
    <<div class="container text-center mt-3">
        <h1 class="display-4"><strong>Todas las mascotas en busqueda de un hogar:</strong></h1>
        </div>

        @foreach ($publicaciones->chunk(3) as $publicacionChunk)
            <div class="row">
                @foreach ($publicacionChunk as $publicacion)
                    <div class="col-md-4">
                        <div
                            class="container w-75 mt-5 rounded shadow mb-5 border border-success border-3 bg-success-subtle d-flex justify-content-center">
                            <div class="card mt-3 mb-3 w-100">
                                <img src="{{ asset('img/imgPublicacion.png') }}" class="card-img-top"
                                    alt="aqui va la imagen de la mascota">
                                <div class="card-header  d-flex justify-content-center">
                                    {{ $publicacion->nombre }}
                                </div>
                                <div class="card-body  d-flex justify-content-center">
                                    <p class="card-text">Descripcion: {{ $publicacion->descripcion }}</p>
                                </div>
                                <div class="card-body  d-flex justify-content-center">
                                    <p class="card-text"><strong>Edad: {{ $publicacion->edad }} año(s)</strong></p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <a href="{{ route('publicacion.show', $publicacion->id) }}" class="btn btn-success">Ver
                                        más informacion de la mascota</a>
                                    <a href="#" class="btn ms-1 btn-primary">Me interesa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    @endsection
