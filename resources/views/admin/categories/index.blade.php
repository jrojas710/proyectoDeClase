@extends('layout.admin')

@section('content')
<style>
    .card-dark { background: #1f2833; padding: 25px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.3); }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; color: #fff; }
    table th, table td { padding: 15px; text-align: left; border-bottom: 1px solid #0b0c10; }
    table th { color: #66fcf1; text-transform: uppercase; font-size: 14px; }
    .btn-admin { padding: 8px 15px; border-radius: 6px; text-decoration: none; font-size: 14px; font-weight: bold; border: none; cursor: pointer; color: #111; }
    .btn-new { background: #66fcf1; margin-bottom: 20px; display: inline-block; }
    .btn-edit { background: #ffd814; margin-right: 10px; }
    .btn-delete { background: #ff4d6d; color: #fff; }
</style>

<div>
    <h1 style="margin-top: 0; font-size: 32px; color: #fff;">Gestión de Categorías</h1>
    
    <a href="{{ route('categories.create') }}" class="btn-admin btn-new">+ Nueva Categoría</a>

    <div class="card-dark">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>#{{ $category->id }}</td>
                    <td style="font-weight: bold;">{{ $category->name }}</td>
                    <td style="color: #b0b8c4;">{{ Str::limit($category->description, 50) }}</td>
                    <td style="display: flex;">
                        <a href="{{ route('categories.edit', $category) }}" class="btn-admin btn-edit">Editar</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-admin btn-delete">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection