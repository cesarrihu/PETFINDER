@extends('layouts.publicaciones')

@section('title')
    Productos
@endsection

@section('content')
    <div class="container text-center mt-3">
        <h1 class="display-4"><strong>Lo mejor para tus mascotas:</strong></h1>
        </div>
        <br>
        
        <hr>

        <div id="success-alert" class="alert alert-success" style="display: none; position: fixed; top: 20px; right: 20px; width: 200px; padding: 10px;">
            <!-- Aquí se mostrará el mensaje de éxito -->
        </div>
        

        @foreach ($products->chunk(3) as $productChunk)
            <div class="row">
                @foreach ($productChunk as $product)
                    <div class="col-md-4">
                        <div
                            class="container w-75 mt-5 rounded shadow mb-5 border border-success border-3 bg-success-subtle d-flex justify-content-center">
                            <div class="card mt-3 mb-3 w-100">
                                <img src="http://localhost/PETFINDER/storage/app/{{ $product->foto_ubicacionProd }}"
                                    class="card-img-top" alt="aqui va la imagen del producto" width="300" height="300">
                                <div class="card-header  d-flex justify-content-center">
                                    {{ $product->nombre }}
                                </div>
                                <div class="card-body  d-flex justify-content-center">
                                    <p class="card-text">Descripcion: {{ $product->descripcion }}</p>
                                </div>
                                <div class="card-body  d-flex justify-content-center">
                                    <p class="card-text"><strong>Precio: ${{ $product->precio }}</strong></p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-success">Ver
                                        producto</a>
                                    @if (Auth::user()->tipo == 'user')
                                        <form action="{{ route('checkout') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button type="submit" class="btn ms-3 btn-primary"
                                                id="checkout-live-button">Comprar</button>
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
