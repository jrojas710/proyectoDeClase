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

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej: Licencia de Software IDE Pro" value="{{ old('nombre') }}" class="@error('nombre') is-invalid @enderror" required>
                    @error('nombre')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="precio">Precio (USD)</label>
                    <input type="number" id="precio" name="precio" step="0.01" placeholder="99.99" value="{{ old('precio') }}" class="@error('precio') is-invalid @enderror" required>
                    @error('precio')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Características clave, beneficios y detalles técnicos..." rows="4" class="@error('descripcion') is-invalid @enderror" required>{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen del Producto</label>
                    <input type="file" id="imagen" name="imagen" accept="image/*" class="@error('imagen') is-invalid @enderror" required>
                    @error('imagen')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select id="category_id" name="category_id" class="@error('category_id') is-invalid @enderror" required>
                        <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>Seleccione una categoría</option>
                        @foreach($categoryList as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Guardar Producto</button>
            </form>
        </div>
    </div>
</div>
@endsection