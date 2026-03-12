@extends('layout.app')

@section('content')
<div class="container">
    <div class="product-grid-enhanced">
        
        @foreach ($misProductos as $product)
            <div class="product-card-enhanced">
                <div class="product-image">
                    <span class="status-badge badge-active">Activo</span>
                    <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=400" alt="">
                </div>
                <div class="product-info">
                    <h3 class="product-name">{{ $product->name }}</h3>
                    <div class="product-price">$ {{ $product->price }}</div>
                    <p class="product-desc">
                        {{ $product->description }}
                    </p>
                    <div class="card-actions">
                        <button class="btn btn-secondary">Editar</button>
                        <button class="btn btn-primary">Detalles</button>
                        
                        <form action="{{ route('product.destroy', $product) }}" method="POST" class="form-delete">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach 

    </div>
</div>
@endsection