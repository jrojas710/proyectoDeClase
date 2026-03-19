@extends('layout.app')

@section('content')

<style>
    .show-container {
        width: 80%;
        max-width: 1000px;
        margin: 40px auto;
        background: white;
        padding: 30px;
        display: flex;
        gap: 40px;
        box-shadow: 0 0 20px rgba(0, 204, 255, 0.2);
        border-radius: 12px;
        color: #333;
    }

    .show-image img {
        width: 350px;
        border-radius: 8px;
        object-fit: cover;
    }

    .show-details {
        flex: 1;
    }

    .show-details h2 {
        margin-top: 0;
        font-size: 28px;
        color: #111;
    }

    .show-price {
        color: #B12704;
        font-size: 28px;
        margin: 15px 0;
        font-weight: bold;
    }

    .show-estado {
        color: green;
        font-weight: bold;
        font-size: 16px;
    }

    .show-buy-box {
        border: 1px solid #ddd;
        padding: 20px;
        width: 250px;
        border-radius: 8px;
        background: #fdfdfd;
    }

    .show-buy-box button {
        width: 100%;
        padding: 12px;
        margin-top: 10px;
        border: none;
        cursor: pointer;
        font-weight: bold;
        border-radius: 20px;
        transition: 0.2s;
    }

    .btn-add {
        background: #FFD814;
        color: #111;
    }

    .btn-add:hover {
        background: #F7CA00;
    }

    .btn-buy {
        background: #FFA41C;
        color: #111;
    }

    .btn-buy:hover {
        background: #FA8900;
    }

    /* Adaptación para celulares */
    @media (max-width: 900px) {
        .show-container {
            flex-direction: column;
            align-items: center;
        }
        .show-buy-box {
            width: 100%;
            box-sizing: border-box;
        }
    }
</style>

<div class="show-container">

    <div class="show-image">
        {{-- Verificamos si tiene imagen en la BD, si no, mostramos una por defecto --}}
        @if($producto->imagen)
            <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->name }}">
        @else
            <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=600" alt="Imagen no disponible">
        @endif
    </div>

    <div class="show-details">
        <h2>{{ $producto->name }}</h2>
        <p><strong>ID del Producto:</strong> #{{ $producto->id }}</p>
        <p class="show-price">$ {{ number_format($producto->price, 2) }}</p>
        
        <p style="line-height: 1.6; color: #555;">{{ $producto->description }}</p>
        
        {{-- Como no creamos la columna 'estado' en la BD, lo dejamos como Disponible por defecto --}}
        <p class="show-estado">Disponible en Stock</p> 
    </div>

    <div class="show-buy-box">
        <p class="show-price">$ {{ number_format($producto->price, 2) }}</p>
        <p class="show-estado">Disponible</p>
        <p style="font-size: 14px; color: #555;">Envío GRATIS aplicable.</p>
        
    <form action="{{ route('cart.store') }}" method="POST" style="margin: 0; flex: 1;">
        @csrf
        <input type="hidden" name="product_id" value="{{ $producto->id }}">
        <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 16px;">
            Añadir al Carrito 🛒
        </button>
    </form>
        <button class="btn-buy">Comprar ahora</button>
    </div>

</div>

@endsection