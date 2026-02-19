<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $productos = [
            [
                'id' => 1,
                'nombre' => 'Laptop Gamer ASUS',
                'precio' => 3500000,
                'imagen' => 'https://picsum.photos/300?random=1',
                'estado' => 'Disponible'
            ],
            [
                'id' => 2,
                'nombre' => 'iPhone 15 Pro',
                'precio' => 5200000,
                'imagen' => 'https://picsum.photos/300?random=2',
                'estado' => 'Disponible'
            ],
            [
                'id' => 3,
                'nombre' => 'Audífonos Sony',
                'precio' => 850000,
                'imagen' => 'https://picsum.photos/300?random=3',
                'estado' => 'Disponible'
            ],
            [
                'id' => 4,
                'nombre' => 'Smartwatch Samsung',
                'precio' => 1200000,
                'imagen' => 'https://picsum.photos/300?random=4',
                'estado' => 'Disponible'
            ],
            [
                'id' => 5,
                'nombre' => 'Monitor 27” 4K',
                'precio' => 1800000,
                'imagen' => 'https://picsum.photos/300?random=5',
                'estado' => 'Disponible'
            ],
            [
                'id' => 6,
                'nombre' => 'Teclado Mecánico RGB',
                'precio' => 450000,
                'imagen' => 'https://picsum.photos/300?random=6',
                'estado' => 'Disponible'
            ],
            [
                'id' => 7,
                'nombre' => 'Mouse Gamer Logitech',
                'precio' => 320000,
                'imagen' => 'https://picsum.photos/300?random=7',
                'estado' => 'Disponible'
            ],
            [
                'id' => 8,
                'nombre' => 'Tablet Samsung',
                'precio' => 2100000,
                'imagen' => 'https://picsum.photos/300?random=8',
                'estado' => 'Disponible'
            ],
            [
                'id' => 9,
                'nombre' => 'Cámara Canon',
                'precio' => 4000000,
                'imagen' => 'https://picsum.photos/300?random=9',
                'estado' => 'Disponible'
            ],
            [
                'id' => 10,
                'nombre' => 'PlayStation 5',
                'precio' => 2900000,
                'imagen' => 'https://picsum.photos/300?random=10',
                'estado' => 'Disponible'
            ],
        ];

        return view('product.index', compact('productos'));
    }
}
