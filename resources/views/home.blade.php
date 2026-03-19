@extends('layout.app')

@section('content')
<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">El Futuro del <br><span>Gaming & Tech</span></h1>
        <p class="hero-subtitle">
            Descubre el mejor hardware, accesorios premium y licencias de software al mejor precio. Eleva tu setup al siguiente nivel hoy mismo.
        </p>
        <div class="hero-buttons">
            <a href="{{ route('product.index') }}" class="btn btn-primary btn-lg">Explorar Catálogo 🚀</a>
        </div>
    </div>
    <div class="hero-image">
        {{-- Usamos una imagen de tecnología de Unsplash para la portada --}}
        <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=800&q=80" alt="Tech Setup">
    </div>
</div>
@endsection