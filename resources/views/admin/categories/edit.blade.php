@extends('layout.admin')

@section('content')
<style>
    .card-dark { background: #1f2833; padding: 30px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.3); max-width: 600px; }
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; color: #66fcf1; margin-bottom: 8px; font-weight: bold; }
    .form-group input, .form-group textarea { width: 100%; padding: 12px; background: #0b0c10; border: 1px solid #45a29e; border-radius: 6px; color: #fff; box-sizing: border-box; }
    .btn-save { background: #ffd814; color: #111; padding: 12px 20px; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; width: 100%; font-size: 16px; }
</style>

<div>
    <h1 style="margin-top: 0; font-size: 32px; color: #fff;">Editar Categoría</h1>
    
    <div class="card-dark">
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nombre de la Categoría</label>
                <input type="text" name="name" value="{{ $category->name }}" required>
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <textarea name="description" rows="4">{{ $category->description }}</textarea>
            </div>
            <button type="submit" class="btn-save">Actualizar Categoría</button>
        </form>
    </div>
</div>
@endsection