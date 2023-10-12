@extends('layouts.app2')

@section('title')
    Registro
@endsection

@section('content')
<style>

    
    .bg1{
        background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_U4m6bLQx73qTruXrQpWeCDfs9gP_mBw4DD5KSlXNk1-GF6STKKdkov5tW1rHxF6zS8Y&usqp=CAU) ;

        background-position: center center;
    }
</style>

<div class="container w-75 mt-5 rounded shadow mb-5">
    <div class="row align-items-stretch">
        <div class="col bg1 d-none d-lg-block">

        </div>
        <div class="col border-3 border-bottom border-success border-top border-success">
            <div class="text-end mt-1">
                <img src="{{asset('img/logo.png')}}" width="48" alt="">
            </div>

            <h2 class="fw-bold text-center pt-3 mb-3">Registro</h2>

            <x-validation-errors class="mb-4" />

            <form action="{{ route('register') }}" method="POST">

                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label" >Nombre Completo</label>
                    <input type="text" placeholder="Tu nombre" class="form-control bg-success-subtle" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label" value="{{ old('email') }}">correo electronico</label>
                    <input type="email" placeholder="usuario@ejemplo.com" class="form-control bg-success-subtle" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label" >contraseña</label>
                    <input type="password" placeholder="ingresa tu contraseña aqui" class="form-control bg-success-subtle" name="password" value="{{ old('password') }}" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label" > confirmar contraseña</label>
                    <input type="password" placeholder="confirma tu contraseña aqui" class="form-control bg-success-subtle" name="password_confirmation" value="{{ old('password_confirmation') }}"required>
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Registrarse</button>
                </div>
                <div class="my-3">
                    <span>Ya tienes cuenta? <a href="{{route('milogin')}}"> Iniciar Sesion</a></span>
                </div>
                <div class="my-3">
                    <p>Recuerda que esta informacion solo sera utilizada para la seguridad de la adopcion.</p>
                </div>
            </form>
            </div>
    </div>
</div>
</div>
@endsection