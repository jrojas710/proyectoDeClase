<!DOCTYPE html>
<html>
<head>
    <title>{{ $producto['nombre'] }}</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f3f3f3;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            display: flex;
            gap: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .image img {
            width: 350px;
        }

        .details {
            flex: 1;
        }

        .price {
            color: #B12704;
            font-size: 28px;
            margin: 10px 0;
        }

        .estado {
            color: green;
            font-weight: bold;
        }

        .buy-box {
            border: 1px solid #ddd;
            padding: 20px;
            width: 250px;
        }

        .buy-box button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            cursor: pointer;
        }

        .add {
            background: #FFD814;
        }

        .buy {
            background: #FFA41C;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="image">
        <img src="{{ $producto['imagen'] }}">
    </div>

    <div class="details">
        <h2>{{ $producto['nombre'] }}</h2>
        <p><strong>ID:</strong> {{ $producto['id_producto'] }}</p>
        <p class="price">$ {{ number_format($producto['precio']) }}</p>
        <p>{{ $producto['descripcion'] }}</p>
        <p class="estado">{{ $producto['estado'] }}</p>
    </div>

    <div class="buy-box">
        <p class="price">$ {{ number_format($producto['precio']) }}</p>
        <p class="estado">{{ $producto['estado'] }}</p>
        <button class="add">Agregar al carrito</button>
        <button class="buy">Comprar ahora</button>
    </div>

</div>

</body>
</html>
