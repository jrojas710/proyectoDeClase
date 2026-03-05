<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        return view('product.create');
    }

    public function show($id)
    {
        return view('product.show');
    }
}