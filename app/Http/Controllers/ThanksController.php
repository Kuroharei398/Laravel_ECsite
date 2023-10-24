<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Consumption_tax;
use App\Models\M_prefecture;
use Illuminate\Support\Facades\Auth;

class ThanksController extends Controller
{
    private $newOrderID = 0;

    public function view_thanks()
    {
        ThanksController::order_Create();
    
        return view('thanks');
    }

    public function order_Create()
    {
        $carts_Data = Cart::where('user_id', Auth::id())->with('product')->get();

        //選択した都道府県を格納
        $selectedPrefecture = session('selectedPrefecture');

        //送料を格納
        $postage = M_prefecture::find($selectedPrefecture)->m_postage;

        //消費税を取得
        $consumption_tax_Data = Consumption_tax::first();

        //消費税率に変換
        $consumptionTaxRate = $consumption_tax_Data->consumption_tax / 100;

        //割り振られているオーダーIDの最大値を取得
        $maxOrderID = Order::max('order_id');

        //選択した都道府県のデータを取得
        $selectedPrefectures = M_prefecture::find($selectedPrefecture);

        foreach ($carts_Data as $_carts_Data) {

             //注文品に割り振るorder_idを生成
            $this->newOrderID = $maxOrderID + 1;
            Order::create([
                'order_id' => $this->newOrderID,
                'user_id' => Auth::id(),
                'product_id' => $_carts_Data->product->id,
                'prefectures_id' => $selectedPrefectures->id,
                'total_price' => $_carts_Data->quantity * ( $_carts_Data->product->price + ($_carts_Data->product->price * $consumptionTaxRate) ) + $postage->postage,
                'quantity' => $_carts_Data->quantity,
                'price' => $_carts_Data->product->price,

            ]);
            $_carts_Data->delete();

            $_carts_Data->product->stock -= $_carts_Data->quantity;
            $_carts_Data->product->save();
        }
        //maxorder_idを更新
        $maxOrderID = $this->newOrderID;
    }
}