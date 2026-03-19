<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <style>
        body { margin: 0; font-family: 'Segoe UI', sans-serif; background: #0b0c10; color: #fff; display: flex; }
        .sidebar { width: 250px; background: #1f2833; height: 100vh; padding: 20px; position: fixed; box-sizing: border-box; }
        .sidebar h2 { color: #66fcf1; text-align: center; margin-bottom: 30px; font-size: 24px; text-transform: uppercase; letter-spacing: 2px; border-bottom: 1px solid #45a29e; padding-bottom: 15px;}
        .sidebar ul { list-style: none; padding: 0; }
        .sidebar ul li { margin-bottom: 15px; }
        .sidebar ul li a { color: #c5c6c7; text-decoration: none; font-size: 16px; display: block; padding: 12px; border-radius: 8px; transition: 0.3s; }
        .sidebar ul li a:hover, .sidebar ul li a.active { background: #45a29e; color: #fff; font-weight: bold; }
        .main-content { margin-left: 250px; padding: 30px; width: calc(100% - 250px); box-sizing: border-box; }
        .topbar { display: flex; justify-content: space-between; align-items: center; background: #1f2833; padding: 15px 30px; border-radius: 12px; margin-bottom: 30px; }
        .topbar input { padding: 10px 20px; border-radius: 20px; border: none; background: #0b0c10; color: #fff; outline: none; width: 300px; }
        .topbar .user-profile { font-weight: bold; color: #66fcf1; display: flex; align-items: center; gap: 10px; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>⚙️ TechAdmin</h2>
        <ul>
            <li><a href="/admin" class="active">📊 Dashboard</a></li>
            <li><a href="{{ route('product.index') }}">📦 Ver Catálogo</a></li>
            <li><a href="{{ route('product.create') }}">➕ Nuevo Producto</a></li>
            <li><a href="#">👥 Clientes</a></li>
            <li><a href="#">🛒 Pedidos</a></li>
            <li><a href="/" style="margin-top: 50px; color: #ff4d6d;">🏠 Salir a la Tienda</a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <div class="topbar">
            <input type="text" placeholder="Buscar productos, órdenes...">
            <div class="user-profile">
                Hola, Administrador
            </div>
        </div>
        
        @yield('content')
        
    </div>
</body>
</html>