@extends('layout.app')

@section('content')
<style>
    .cart-container { max-width: 1000px; margin: 40px auto; padding: 20px; }
    .cart-title { color: #fff; font-size: 32px; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 15px; }
    .cart-card { background: rgba(20, 22, 30, 0.6); backdrop-filter: blur(15px); border-radius: 16px; border: 1px solid rgba(255,255,255,0.08); overflow: hidden; }
    .cart-item { display: flex; align-items: center; padding: 20px; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .cart-item:last-child { border-bottom: none; }
    .cart-img { width: 100px; height: 100px; border-radius: 10px; object-fit: cover; margin-right: 20px; }
    .cart-info { flex: 1; }
    .cart-name { font-size: 18px; color: #fff; font-weight: bold; margin: 0 0 5px 0; }
    .cart-price { color: #00ccff; font-weight: bold; font-size: 16px; margin: 0; }
    .cart-quantity { background: rgba(255,255,255,0.1); padding: 5px 15px; border-radius: 20px; color: #fff; font-size: 14px; margin: 0 20px; }
    .cart-subtotal { font-size: 18px; font-weight: bold; color: #fff; min-width: 100px; text-align: right; margin-right: 20px; }
    .btn-remove { background: rgba(255, 77, 109, 0.1); color: #ff4d6d; border: 1px solid rgba(255, 77, 109, 0.3); padding: 8px 15px; border-radius: 8px; cursor: pointer; transition: 0.3s; }
    .btn-remove:hover { background: #ff4d6d; color: #fff; }
    .cart-footer { display: flex; justify-content: space-between; align-items: center; padding: 30px 20px; background: rgba(0,0,0,0.2); }
    .cart-total { font-size: 24px; color: #fff; font-weight: bold; }
    .cart-total span { color: #00ff88; font-size: 28px; margin-left: 10px; }
    .btn-checkout { background: linear-gradient(45deg, #00ff88, #00ccff); color: #111; padding: 15px 30px; font-size: 18px; font-weight: bold; border: none; border-radius: 10px; cursor: pointer; text-decoration: none; }
    .empty-cart { text-align: center; padding: 50px 20px; color: #b0b8c4; font-size: 18px; }
</style>

<div class="cart-container">
    <h1 class="cart-title">Tu Carrito de Compras 🛒</h1>

    @if(session('success'))
        <div style="background: rgba(0, 255, 136, 0.1); color: #00ff88; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(0, 255, 136, 0.3);">
            {{ session('success') }}
        </div>
    @endif

    <div class="cart-card">
        @if(count($cartItems) > 0)
            @foreach($cartItems as $item)
                <div class="cart-item">
                    @if($item->product->imagen)
                        <img src="{{ asset($item->product->imagen) }}" class="cart-img">
                    @else
                        <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=200" class="cart-img">
                    @endif
                    
                    <div class="cart-info">
                        <h3 class="cart-name">{{ $item->product->name }}</h3>
                        <p class="cart-price">$ {{ number_format($item->product->price, 2) }}</p>
                    </div>

                    <div class="cart-quantity">Cant: {{ $item->quantity }}</div>
                    
                    <div class="cart-subtotal">
                        $ {{ number_format($item->product->price * $item->quantity, 2) }}
                    </div>

                    <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-remove">✖</button>
                    </form>
                </div>
            @endforeach

            <div class="cart-footer">
                <a href="{{ route('product.index') }}" style="color: #b0b8c4; text-decoration: none;">← Seguir comprando</a>
                <div style="display: flex; align-items: center; gap: 30px;">
                    <div class="cart-total">Total: <span>$ {{ number_format($total, 2) }}</span></div>
                    <button class="btn-checkout">Proceder al Pago</button>
                </div>
            </div>
        @else
            <div class="empty-cart">
                <p>Tu carrito está vacío 😔</p>
                <a href="{{ route('product.index') }}" class="btn btn-primary" style="display: inline-block; margin-top: 15px;">Ir a la tienda</a>
            </div>
        @endif
    </div>
</div>
@endsection