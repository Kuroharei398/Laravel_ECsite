<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function view_payment()
    {
        //ログインユーザーのデータ取得
        $payment = Payment::where('user_id', Auth::id())->first();

        return view('payment', compact('payment'));
    }

    public function payment_regist(Request $request)
    {
        //バリデーション設定
        $request->validate([
            'card_number' => 'required|digits:16',
            'card_kind' => 'required|in:1,2,3',
            'expiration_year' => 'required|digits:2',
            'expiration_month' => 'required|digits:2',
            'card_holder' => 'required|max:64',
            'first_name' => 'required|max:32',
            'last_name' => 'required|max:32',
            'zip_code1' => 'required|digits:3',
            'zip_code2' => 'required|digits:4',
            'address' => 'required|max:1000',
        ]);

        //バリデーション確認しデータベース登録
        Payment::create([
            'user_id' => Auth::id(),
            'card_number' => $request->card_number,
            'card_kind' => $request->card_kind,
            'expiration_year' => $request->expiration_year,
            'expiration_month' => $request->expiration_month,
            'card_holder' => $request->card_holder,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'zip_code1' => $request->zip_code1,
            'zip_code2' => $request->zip_code2,
            'address' => $request->address,
        ]);


        return redirect()->route('thanks');
    }
}