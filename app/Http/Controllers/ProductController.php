<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function show()
    {
        return view('shop.show');
    }
}
