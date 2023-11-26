@extends('layouts.correo')


@section('content')
    <!-- Nombre de la aplicación -->
    <div class="app-name">
        Petfinder
    </div>

    <!-- Separador -->
    <hr class="separator">

    <!-- Contenido del correo -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Hola, {{ $user->name }}</h2>
                <hr>
                <p>Estás interesado en adoptar la siguiente mascota:</p>

                <div class="pet-image">
                    <img src="http://localhost/PETFINDER/storage/app/{{$publi->archivo_ubicacion}}" alt="Imagen de la mascota">
                </div>

                <!-- Detalles de la publicación -->
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $publi->nombre }}</h4>
                        <p>Raza: {{ $publi->raza }}</p>
                        <p>Descripción: {{ $publi->descripcion }}</p>
                        <p>Edad: {{ $publi->edad }} año/s</p>
                        <p>Color: {{ $publi->color }}</p>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <!-- Requisitos de adopción -->
                <p>Para completar tu proceso de adopción, necesitarás:</p>
                <ul>
                    <li>Requisitos específicos de adopción</li>
                    <ul>
                        <li>Formulario de solicitud de adopción</li>
                        <li>Aprobación del espacio,se puede requerir una visita al hogar para garantizar que sea un entorno seguro y adecuado para la mascota.</li>
                        <li>Aceptación de términos y condiciones</li>
                        <li>Pago de tarifa de adopción $200</li>
                        <li>Firmar un contrato de adopción</li>
                    </ul>
                    <li>El domicilio a donde acudir es Blvd. Marcelino García Barragán #1421</li>
                    <li>Cualquier informacion de consulta favor de llamar al siguiente numero: 3841266725</li>
                </ul>
                <!-- Agradecimiento -->
                <p>¡Gracias por considerar la adopción!</p>
            </div>
        </div>
    </div>
@endsection
