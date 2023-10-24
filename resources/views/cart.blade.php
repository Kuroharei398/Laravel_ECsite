@extends('layout_header')

@section('header_title', '購入品')

<body>
    @section('content')
    <div>
        <h1>購入品画面</h1>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ユーザーID</th>
                    <th>商品ID</th>
                    <th>数量</th>
                    <th>金額</th>
                    <th>個別金額</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carts_Data as $_carts_Data)
                <tr>
                    <td>{{ $_carts_Data->id }}</td>
                    <td>{{ $_carts_Data->user_id }}</td>
                    <td>{{ $_carts_Data->product_id }}</td>
                    <td>{{ $_carts_Data->quantity }}</td>
                    <td>{{ $_carts_Data->itemPrice }}円</td>
                    <td>{{ $_carts_Data->product->price }}</td>
                    <td>
                        <form method="POST" action="{{ route('cart.quantity_Update', $_carts_Data->id) }}">
                            @csrf
                            <label for="quantity">個数</label>
                            <select name="quantity" id="quantity">
                                @foreach($quantities as $_quantity)
                                    <option value="{{ $_quantity }}">{{ $_quantity }}</option>
                                @endforeach
                            </select>
                            <button type="submit">更新</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('cart.cart_Deleate', $_carts_Data->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p>合計金額: {{ $totalPrice }}円</p>
    </div>
    <div>
        <form method="GET" action="{{ route('payment') }}">
            @csrf
            <button type="submit">支払いに進む</button>
        </form>
    </div>
    @endsection
</body>
</html>