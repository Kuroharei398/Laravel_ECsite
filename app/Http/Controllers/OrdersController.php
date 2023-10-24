<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function view_orders()
    {
        $orders_Data = Order::where('user_id' , Auth::id())->get();

        return view('orders' , compact('orders_Data'));
    }
}