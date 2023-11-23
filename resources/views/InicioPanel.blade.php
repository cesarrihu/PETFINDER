
@extends('layouts.app4')

@section('title')
    Panel de Administración
@endsection

@section('content')
            
            <div class="d-grid gap-2">
                
                <a href="http://petfinder.test/stats"> <button class="btn btn-primary mt-4" type="button">Ver estadisitcas de las mascotas </button></a>
                
            </div>

            <div class="row mt-4 ">
               
            </div>
           
            
                
                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detalle de todas las mascotas del refugio de las más recientes a las más antiguas</h6>
                        </div>
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Edad</th>
                                            <th>Raza</th>
                                            <th>Color</th>
                                            <th>Fecha de ingreso</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Edad</th>
                                            <th>Raza</th>
                                            <th>Color</th>
                                            <th>Fecha de ingreso</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($publicaciones as $publicacion)
                                        <tr>
                                            <td>{{$publicacion->nombre}}</td>
                                            <td>{{$publicacion->edad}}</td>
                                            <td>{{$publicacion->raza}}</td>
                                            <td>{{$publicacion->color}}</td>
                                            <td>{{$publicacion->created_at}}</td>
                                        </tr>
                                        @endforeach
                                     
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                        
                    </div>

                    <div class="col-lg-6 mb-4">                     

                    </div>
                </div>

            </div>

        </div>
    </div>


</div>

@endsection