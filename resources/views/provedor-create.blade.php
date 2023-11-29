@extends('layouts.app3')

@section('title')
    crear producto
@endsection

@section('content')

<div class="container w-50 mt-5 rounded shadow mb-5 border border-success border-3 bg-success-subtle">
    <div class="container w-90 mt-3 rounded shadow  bg-white">
        
        <img src="{{asset('img/logo.png')}}" alt="Tu Logo" class="img-fluid mt-3" style="max-width: 50px;">
            <h2 class="fw-bold text-center  mb-3 ">Asocie el provedor con los productos existentes:</h2>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        <div >
            <form class="mt-3 mb-3" action="{{ route('provedor.store') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="provedorNombre" class="form-label">Nombre del provedor</label>
                    <input type="text" placeholder="ingrese el nombre aquí" class="form-control bg-success-subtle" name="provedorNombre" value="{{ old('provedorNombre') }}" required>
                </div>
                <hr>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Guardar producto</button>
                </div>
               <br>
            
            </form>
        </div>
    </div>
</div>

 @endsection

