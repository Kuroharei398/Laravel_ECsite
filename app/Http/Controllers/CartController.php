<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function view_cart()
    {
        $carts_Data = Cart::where('user_id', Auth::id())->with('product')->get();
    
        $quantities = range(1, 10);

        $totalPrice = 0;

        foreach ($carts_Data as $cartItem) {
            if ($cartItem->product) {
                $itemPrice = $cartItem->quantity * $cartItem->product->price;
                $cartItem->itemPrice = $itemPrice;
                $totalPrice += $itemPrice;
            }
        }

        //dd($carts_Data);

        return view('cart' , compact('carts_Data' , 'quantities' , 'totalPrice'));
    }

    public function quantity_Update(Request $request , $id)
    {
        Cart::find($id)->update([
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('cart', compact('id'));
    }

    public function cart_Deleate($id)
    {
       Cart::find($id)->delete(); // 商品IDに基づいて商品を検索

        // 商品を削除

        return redirect()->route('cart', compact('id'));
    }
}