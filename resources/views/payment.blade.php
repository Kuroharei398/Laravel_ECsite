@extends('layout_header')

@section('header_title', '購入金額')

<body>
    @section('content')
    <div>
        <h1>支払い情報入力</h1>
    </div>
    <div>
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif

        {{-- エラーメッセージ表示箇所 --}}
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {{-- ここまで --}}

        <form method="POST" action="{{ route('payment_regist') }}">
            @csrf
            <label for="card_number">カード番号</label>
            <input type="text" name="card_number" id="card_number" value="{{ old('card_number', $payment->card_number ?? '') }}" required><br>

            <label for="card_kind">カード種類：</label>
            <select name="card_kind" id="card_kind">
                <option value="1">VISA</option>
                <option value="2">MASTER</option>
                <option value="3">JCB</option>
            </select><br>

            <label for="expiration_year">有効期限/年</label>
            <input type="text" name="expiration_year" id="expiration_year" value="{{ old('expiration_year', $payment->expiration_year ?? '') }}" required><br>

            <label for="expiration_month">/月</label>
            <input type="text" name="expiration_month" id="expiration_month"  value="{{ old('expiration_month', $payment->expiration_month ?? '') }}" required><br>

            <label for="card_holder">名義人</label>
            <input type="text" name="card_holder" id="card_holder" value="{{ old('card_holder', $payment->card_holder ?? '') }}" required><br>

            <label for="first_name">名前</label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $payment->first_name ?? '') }}" required><br>

            <label for="last_name">名字</label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $payment->last_name ?? '') }}" required><br>

            <label for="zip_code1">郵便番号</label>
            <input type="text" name="zip_code1" id="zip_code1" value="{{ old('zip_code1', $payment->zip_code1 ?? '') }}" required>

            <label for="zip_code2">-</label>
            <input type="text" name="zip_code2" id="zip_code2" value="{{ old('zip_code2', $payment->zip_code2 ?? '') }}" required><br>

            <label for="address">住所</label>
            <input type="text" name="address" id="address" value="{{ old('address', $payment->address ?? '') }}" required><br>

            @livewire('shipping-cost-selector')
        
            <button type="submit">購入する</button>
        </form>
    </div>
    @endsection
</body>
</html>