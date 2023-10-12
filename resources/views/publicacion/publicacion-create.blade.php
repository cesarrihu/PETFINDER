@extends('layouts.app3')

@section('title')
    crear publicacion
@endsection

@section('content')
    
    <div class="container w-50 mt-5 rounded shadow mb-5 border border-success border-3 bg-success-subtle">
    <div class="container w-90 mt-3 rounded shadow  bg-white">
    
        <img src="{{asset('img/logo.png')}}" alt="Tu Logo" class="img-fluid mt-3" style="max-width: 50px;">
    
        <h2 class="fw-bold text-center  mb-3 ">Formulario para crear publicaciones</h2>
    
            <form action="{{route('publicacion.store')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" placeholder="Firulais" class="form-control bg-success-subtle" name="nombre" required>
                </div><br>
                <div class="mb-4">
                    <label for="raza" class="form-label">Raza</label>
                    <input type="text" placeholder="Chihuahua" class="form-control bg-success-subtle" name="raza" required>
                </div><br>
                <div class="mb-4">
                    <label for="descripcion" class="form-label">Descripción</label> <br>
                    <textarea type="text" placeholder="Datos acerca de la mascota" class="form-control bg-success-subtle" name="descripcion" cols="30" rows="10" required></textarea>
                </div><br>
                <div class="mb-4">
                    <label for="age" class="form-label">Edad</label>
                    <input type="text" placeholder="1 año" class="form-control bg-success-subtle" name="edad" required>
                </div><br>
                <div class="mb-4">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" placeholder="Blanco" class="form-control bg-success-subtle" name="color" required>
                </div><br>
            

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Guardar publicacion</button>
                </div>
                <div class="my-3">
                    <p>Recuerda que esta informacion será visible para todos los usuarios</p>
                </div>
            </form>
        </div>
        </div>

 @endsection