<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AdminCategoriesController extends Controller
{
    public function view_admincategories()
    {
        if (Auth::user()->user_authority !== 1) {
            return redirect()->route('top'); // リダイレクト先を設定
        }

        $categories_Data = Category::orderBy('id', 'asc')->get();

        return view('\admin\admin_categories' , compact('categories_Data'));
    }

    public function category_Addition(Request $request)
    {
        Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('admin.categories')->with('success' , 'カテゴリーが追加されました');
    }
}