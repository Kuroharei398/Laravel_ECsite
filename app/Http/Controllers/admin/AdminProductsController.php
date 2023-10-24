<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AdminProductsController extends Controller
{
    public function view_adminproducts()
    {
        if (Auth::user()->user_authority !== 1) {
            return redirect()->route('top'); // リダイレクト先を設定
        }

        $products_Data = Product::all();

        $categories_Data = Category::all();

        //$categories_Range = range(1 , count($categorys_Data));

        return view('\admin\admin_products' , compact('products_Data' , 'categories_Data'));
    }

    public function addition(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_name,
        ]);

        return redirect()->route('admin.products')->with('success' , 'レコードが追加されました');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $products_Data = Product::where('name' , 'LIKE' , "%$keyword%")->get();

        return view('\admin\admin_products' , compact('products_Data'));
    }
}