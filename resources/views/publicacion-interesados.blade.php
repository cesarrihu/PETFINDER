@extends('layouts.app3')

@section('title')
    Interesados
@endsection

@section('content')

        @php
         {{$usuariosInteresados = $publicacion->users;}}
        @endphp

        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nombre del usuario</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nombre del usuario</th>
                            <th>Correo</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($usuariosInteresados as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                        </tr>
                        @endforeach
                    
                
                    </tbody>
                </table>
            </div>
        </div>
        </div>


@endsection
