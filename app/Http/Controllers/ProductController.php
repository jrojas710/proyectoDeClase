<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $misProductos = Product::all();
        return view('product.index', compact('misProductos'));
    }

    public function create()
    {
        $categoryList = Category::all();

        return view('product.create',[
            'categoryList' => $categoryList
        ]);
    }

    public function store(Request $request)
    {
        $newProduct = new Product();
        $newProduct->name = $request->get('nombre');
        $newProduct->description = $request->get('descripcion');
        $newProduct->price = $request->get('precio');
        $newProduct->category_id = $request->get('category_id');

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '-' . $file->getClientOriginalName();
            
            $file->move(public_path('images'), $filename);
            
            $newProduct->imagen = 'images/' . $filename;
        }

        $newProduct->save();

        return back()->with('success', '✨ ¡Producto guardado exitosamente!');
    }

    public function show($id)
    {
        return view('product.show');
    }
}