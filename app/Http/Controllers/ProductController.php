<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop.show', [
            'product' => $product
        ]);
    }
}
