<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class ProductDetailController extends Controller
{
    public function view_productdetail($id)
    {
        $product = Product::find($id);

        $quantities = range(1, $product->stock);

        return view('product_detail', compact('product' , 'quantities'));
    }

    public function quantity(Request $request , $id)
    {
        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $id,
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('cart' , compact('id'))->with('success' , 'カートレコードが追加されました');
    }
}