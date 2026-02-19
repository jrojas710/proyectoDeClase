<!DOCTYPE html>
<html>
<head>
    <title>Tienda TechStore</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>🚀 TechStore Premium</h1>

<div class="grid">

@foreach($productos as $producto)
    <div class="card">
        <img src="{{ $producto['imagen'] }}">
        <div class="card-body">
            <h3>{{ $producto['nombre'] }}</h3>
            <p class="price">$ {{ number_format($producto['precio']) }}</p>
            <p class="estado">{{ $producto['estado'] }}</p>
            <a href="#" class="btn">Ver Producto</a>
        </div>
    </div>
@endforeach

</div>

</body>
</html>
