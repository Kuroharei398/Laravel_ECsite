<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\M_prefecture;
use App\Models\Cart;
use App\Models\Consumption_tax;
use Illuminate\Support\Facades\Auth;

class ShippingCostSelector extends Component
{
    public $selectedPrefecture;
    public $shippingCost;
    public $totalPrice;
    public $deliveryDay;

    public function render()
    {
        $prefectures = M_prefecture::pluck('prefecture', 'id');

        return view('livewire.shipping-cost-selector', [
            'prefectures' => $prefectures,
            'shippingCost' => $this->shippingCost,
            'totalprice' => $this->totalPrice,
            'deliveryDay' => $this->deliveryDay,
        ]);
    }

    public function updateShippingCost()
    {
        // 選択された都道府県に基づいて送料を計算
        $prefecture = M_prefecture::with('m_postage')->find($this->selectedPrefecture);

        $postage = $prefecture->m_postage->postage;

        $this->shippingCost = $postage;

        // ユーザーのカート内のアイテムを取得
        $carts_Data = Cart::where('user_id', Auth::id())->with('product')->get();

        $consumption_tax_Data = Consumption_tax::first();

        $consumptionTaxRate = $consumption_tax_Data->consumption_tax / 100;

        // 合計金額を計算
        $this->totalPrice = $carts_Data->sum(function ($cartItem) use ($consumptionTaxRate) {
            return $cartItem->quantity * ($cartItem->product->price + ( $cartItem->product->price * $consumptionTaxRate)) + $this->shippingCost;
        });

        $this->updateDeliverydays();

        session(['selectedPrefecture' => $this->selectedPrefecture]);
    }

    public function updateDeliverydays()
    {
        //選択した都道府県のデータを取得
        $Prefecture = M_prefecture::find($this->selectedPrefecture);

        //都道府県に内包されているお届け日数を取得
        $delivery_Days = $Prefecture->m_delivery_date->delivery_date;

        //今日の日付を取得
        $currentDate = \Carbon\Carbon::now();

        //今日にお届け日数を足す
        $this->deliveryDay = $currentDate->addDays($delivery_Days);
    }
}