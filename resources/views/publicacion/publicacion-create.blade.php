@extends('layouts.app3')

@section('title')
    crear publicacion
@endsection

@section('content')
    
    <div class="container w-50 mt-5 rounded shadow mb-5 border border-success border-3 bg-success-subtle">
    <div class="container w-90 mt-3 rounded shadow  bg-white">
    
        <img src="{{asset('img/logo.png')}}" alt="Tu Logo" class="img-fluid mt-3" style="max-width: 50px;">
    
        <h2 class="fw-bold text-center  mb-3 ">Formulario para crear publicaciones</h2>
        
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

            <form action="{{route('publicacion.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" placeholder="Firulais" class="form-control bg-success-subtle" name="nombre" value="{{ old('nombre') }}" required>
                </div><br>
                <div class="mb-4">
                    <label for="raza" class="form-label">Raza</label>
                    <input type="text" placeholder="Chihuahua" class="form-control bg-success-subtle" name="raza" value="{{ old('raza') }}" required>
                </div><br>
                <div class="mb-4">
                    <label for="descripcion" class="form-label">Descripción</label> <br>
                    <textarea type="text" placeholder="Datos acerca de la mascota" class="form-control bg-success-subtle" name="descripcion" cols="30" rows="10" required>{{ old('descripcion') }}</textarea>
                </div><br>
                <div class="mb-4">
                    <label for="age" class="form-label">Edad</label>
                    <input type="text" placeholder="1 año" class="form-control bg-success-subtle" name="edad" value="{{ old('edad') }}" required>
                </div><br>
                <div class="mb-4">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" placeholder="Blanco" class="form-control bg-success-subtle" name="color" value="{{ old('color') }}" required>
                </div><br>
                <div class="mb-3">
                    <label for="archivo" class="form-label ">Insertar foto para la mascota</label>
                    <input class="form-control bg-success-subtle" type="file" name="archivo" id="archivo">
                </div>
            

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