  @extends('layouts.publicaciones')

@section('title')
    Publicaciones
@endsection

@section('content')
    <div class="container text-center mt-3">
        <h1 class="display-4"><strong>Todas las mascotas en busqueda de un hogar:</strong></h1>
        </div>

        <div id="success-alert" class="alert alert-success" style="display: none; position: fixed; top: 20px; right: 20px; width: 200px; padding: 10px;">
            <!-- Aquí se mostrará el mensaje de éxito -->
        </div>

        @foreach ($publicaciones->chunk(3) as $publicacionChunk)
            <div class="row">
                @foreach ($publicacionChunk as $publicacion)
                    <div class="col-md-4">
                        <div
                            class="container w-75 mt-5 rounded shadow mb-5 border border-success border-3 bg-success-subtle d-flex justify-content-center">
                            <div class="card mt-3 mb-3 w-100">

                                <img src="http://localhost/PETFINDER/storage/app/{{$publicacion->archivo_ubicacion}} " class="card-img-top"
                                    alt="aqui va la imagen de la mascota" width="300" height="300">
                                <div class="card-header  d-flex justify-content-center">
                                    {{ $publicacion->nombre }}
                                </div>
                                <div class="card-body  d-flex justify-content-center">
                                    <p class="card-text">Descripcion: {{ $publicacion->descripcion}}</p>
                                </div>
                                <div class="card-body  d-flex justify-content-center">
                                    <p class="card-text"><strong>Edad: {{ $publicacion->edad }} año(s)</strong></p>
                                </div>
                                <div class="card-body  d-flex justify-content-center">
                                    <p class="card-text"><strong>Tipo: {{ $publicacion->tipo }}</strong></p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <a href="{{ route('publicacion.show', $publicacion->id) }}" class="btn btn-success">Ver
                                        más informacion de la mascota</a>
                                        @if(Auth::user()->tipo == 'user')    
                                        <form method="POST" action="{{ route('publicacion.interes', ['publicacion_id' => $publicacion->id, 'user_id' => $user->id]) }}">
                                            @csrf
                                            <button type="submit" class="btn ms-1 btn-primary">Me interesa</button>
                                        </form>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        <script>
            // Función para mostrar la alerta
            function showSuccessAlert(message) {
                const alertDiv = document.getElementById('success-alert');
                alertDiv.textContent = message;
                alertDiv.style.display = 'block';
    
                // Ocultar la alerta después de 5 segundos
                setTimeout(function() {
                    alertDiv.style.display = 'none';
                }, 5000); // 5000 milisegundos = 5 segundos
            }
    
            // Llamada a la función showSuccessAlert si hay un mensaje de éxito en la sesión
            @if(session('success'))
                showSuccessAlert('{{ session('success') }}');
            @endif

        </script>
        
    @endsection
