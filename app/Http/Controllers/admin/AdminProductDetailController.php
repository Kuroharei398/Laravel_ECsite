<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AdminProductDetailController extends Controller
{
    public function view_adminproductdetail($id)
    {
        $product = Product::find($id);

        if (Auth::user()->user_authority !== 1) {
            return redirect()->route('top'); // リダイレクト先を設定
        }

        return view('\admin\admin_product_detail', compact('product'));
    }

    public function update(Request $request , $id)
    {
        Product::find($id)->update([
            'name' => $request->name,
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
        ]);

        return redirect()->route('admin.products', compact('id'))->with('success' , '商品データを更新しました');
    }

    public function deleate($id)
    {
       Product::find($id)->delete(); // 商品IDに基づいて商品を検索

        // 商品を削除

        return redirect()->route('admin.products', compact('id'))->with('success' , '選択した商品が削除されました');
    }
}