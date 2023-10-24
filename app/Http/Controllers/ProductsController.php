<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function view_products()
    {
        $products_Data = Product::with('category')->get();

        return view('products' , compact('products_Data'));
    }
}