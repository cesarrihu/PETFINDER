@extends('layouts.app')

@section('title')
    Inicio de sesion
@endsection

@section('content')

<style>

    
    .bg1{
        background-image: url(https://img.freepik.com/foto-gratis/primer-disparo-vertical-lindo-gato-europeo-pelo-corto_181624-34587.jpg) ;

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

            <h2 class="fw-bold text-center pt-5 mb-5">Bienvenido</h2>

            <form action="#" method="POST">

                <div class="mb-4">
                    <label for="email" class="form-label">correo electronico</label>
                    <input type="email" placeholder="usuario@ejemplo.com" class="form-control bg-success-subtle" name="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">contraseña</label>
                    <input type="password" placeholder="ingresa tu contraseña aqui" class="form-control bg-success-subtle" name="password">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Iniciar Sesion</button>
                </div>
                <div class="my-3">
                    <span>No tienes cuenta? <a href="{{route('registro')}}"> Registrarse</a></span>
                </div>
            </form>

            <div class="container w-100 my-5">
                <div class="row text-center">
                    <div>Iniciar sesion con:</div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-outline-primary w-100 my-1" >
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{asset('img/face.png')}}" width="32" alt="">
                                </div>

                                <div class="col-10 text-center">
                                    Facebook
                                </div>

                            </div>
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-danger w-100 my-1" >
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{asset('img/google.png')}}" width="32" alt="">
                                </div>

                                <div class="col-10 text-center">
                                    Google
                                </div>

                            </div>
                        </button>
                    </div>
                </div>

            </div>
    </div>
</div>
</div>

@endsection