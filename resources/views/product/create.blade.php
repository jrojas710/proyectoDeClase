@extends('layout.app')

@section('content')
<div class="container">
    <div class="form-wrapper">
        <div class="form-card">
            <h2 class="form-title">Registrar Nuevo Producto</h2>

            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej: Licencia de Software IDE Pro" required>
                </div>

                <div class="form-group">
                    <label for="precio">Precio (USD)</label>
                    <input type="number" id="precio" name="precio" step="0.01" placeholder="99.99" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Características clave, beneficios y detalles técnicos..." rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen del Producto</label>
                    <input type="file" id="imagen" name="imagen" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select id="category_id" name="category_id" required>
                        <option value="" disabled selected>Seleccione una categoría</option>
                        @foreach($categoryList as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Guardar Producto</button>
            </form>
        </div>
    </div>
</div>
@endsection