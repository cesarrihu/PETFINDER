@extends('layouts.app3')

@section('title')
    editar publicacion
@endsection

@section('content')

    <div class="container w-50 mt-5 rounded shadow mb-5 border border-success border-3 bg-success-subtle">
        <div class="container w-90 mt-3 rounded shadow  bg-white">
            
            <img src="{{asset('img/logo.png')}}" alt="Tu Logo" class="img-fluid mt-3" style="max-width: 50px;">
            <h2 class="fw-bold text-center   mb-3">Modificar publicacion</h2>
            <form action="{{route('publicacion.update', $publicacion)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-4">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" placeholder="Firulais" class="form-control bg-success-subtle" name="nombre"  value="{{$publicacion->nombre}}" required>
                        </div><br>
                        <div class="mb-4">
                            <label for="raza" class="form-label">Raza</label>
                            <input type="text" placeholder="Chihuahua" class="form-control bg-success-subtle" name="raza" value="{{$publicacion->raza}}" required>
                        </div><br>
                        <div class="mb-4">
                            <label for="descripcion" class="form-label">Descripción</label> <br>
                            <textarea type="text" placeholder="Datos acerca de la mascota" class="form-control bg-success-subtle" name="descripcion" cols="30" rows="10" required>{{$publicacion->descripcion}}</textarea>
                        </div><br>
                        <div class="mb-4">
                            <label for="age" class="form-label">Edad</label>
                            <input type="text" placeholder="1 año" class="form-control bg-success-subtle" name="edad" value="{{$publicacion->edad}}" required>
                        </div><br>
                        <div class="mb-4">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" placeholder="Blanco" class="form-control bg-success-subtle" name="color" value="{{$publicacion->color}}" required>
                        </div><br>
                    

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Actualizar datos</button>
                        </div>
                        <div class="my-3">
                            <p>Recuerda que esta informacion será visible para todos los usuarios</p>
                        </div>
                    </form>
                </div>
            </div>    
            @endsection
            