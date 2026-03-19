@extends('layout.admin')

@section('content')
<style>
    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 30px; }
    .stat-card { background: #1f2833; padding: 25px; border-radius: 12px; border-left: 5px solid #66fcf1; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: 0.3s;}
    .stat-card:hover { transform: translateY(-5px); }
    .stat-card h3 { margin: 0; color: #c5c6c7; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; }
    .stat-card .number { font-size: 36px; color: #fff; font-weight: bold; margin-top: 10px; }
    .recent-orders { background: #1f2833; padding: 25px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.3); }
    .recent-orders h3 { margin-top: 0; color: #66fcf1; font-size: 20px; border-bottom: 1px solid #0b0c10; padding-bottom: 15px; }
    table { width: 100%; border-collapse: collapse; margin-top: 15px; }
    table th, table td { padding: 15px; text-align: left; border-bottom: 1px solid #0b0c10; }
    table th { color: #c5c6c7; font-weight: normal; text-transform: uppercase; font-size: 14px; }
</style>

<div>
    <h1 style="margin-top: 0; font-size: 32px;">Resumen General</h1>

    <div class="stats-grid">
        <div class="stat-card">
            <h3>Ventas Totales</h3>
            <div class="number">$ 12,450.00</div>
        </div>
        <div class="stat-card" style="border-left-color: #ff4d6d;">
            <h3>Productos Activos</h3>
            <div class="number">142</div>
        </div>
        <div class="stat-card" style="border-left-color: #ffd814;">
            <h3>Pedidos Pendientes</h3>
            <div class="number">38</div>
        </div>
        <div class="stat-card" style="border-left-color: #00ff88;">
            <h3>Nuevos Clientes</h3>
            <div class="number">1,204</div>
        </div>
    </div>

    <div class="recent-orders">
        <h3>Últimos Movimientos</h3>
        <table>
            <thead>
                <tr>
                    <th>ID Pedido</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#00105</td>
                    <td>Juan Pérez</td>
                    <td>Hoy, 10:30 AM</td>
                    <td>$ 1,200.00</td>
                    <td style="color: #00ff88; font-weight: bold;">Completado</td>
                </tr>
                <tr>
                    <td>#00104</td>
                    <td>María Gómez</td>
                    <td>Hoy, 09:15 AM</td>
                    <td>$ 850.50</td>
                    <td style="color: #ffd814; font-weight: bold;">En Preparación</td>
                </tr>
                <tr>
                    <td>#00103</td>
                    <td>Carlos López</td>
                    <td>Ayer, 16:40 PM</td>
                    <td>$ 320.00</td>
                    <td style="color: #ff4d6d; font-weight: bold;">Cancelado</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection