<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class AdminOrdersController extends Controller
{
    public function view_adminorders()
    {
        if (Auth::user()->user_authority !== 1) {
            return redirect()->route('top'); // リダイレクト先を設定
        }

        $orders_Data = Order::all();

        return view('\admin\admin_orders' , compact('orders_Data'));
    }

    public function orderStatus_Update(Request $request , $id)
    {
        Order::find($id)->update([
            'order_status' => $request->order_status,
        ]);

        return redirect()->route('admin.orders', compact('id'));
    }
}