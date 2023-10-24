@extends('layout_header')

@section('header_title', '購入履歴')

<body>
    @section('content')
    <div>
        <h1>購入履歴画面</h1>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>オーダーID</th>
                    <th>ユーザーID</th>
                    <th>商品ID</th>
                    <th>都道府県ID</th>
                    <th>個数</th>
                    <th>合計金額</th>
                    <th>お届け日</th>
                    <th>作成日時</th>
                    <th>更新日時</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders_Data as $_orders_Data)
                <tr>
                    <td>{{ $_orders_Data->id }}</td>
                    <td>{{ $_orders_Data->order_id }}</td>
                    <td>{{ $_orders_Data->user_id }}</td>
                    <td>{{ $_orders_Data->product_id }}</td>
                    <td>{{ $_orders_Data->prefectures_id }}</td>
                    <td>{{ $_orders_Data->quantity }}</td>
                    <td>{{ $_orders_Data->total_price }}</td>
                    <td>
                        @if($_orders_Data->order_status === 0)
                            発送準備中
                        @elseif($_orders_Data->order_status === 1)
                            {{ $_orders_Data->updated_at->addDays($_orders_Data->m_prefecture->m_delivery_date->delivery_date)->format('Y-m-d H:i:s') }}にお届け予定
                        @endif
                    </td>
                    <td>{{ $_orders_Data->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $_orders_Data->updated_at->format('Y-m-d H:i:s') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <form method="GET" action="{{ route('top') }}">
            @csrf
            <button type="submit">トップページ</button>
        </form>
    </div>
    @endsection
</body>
</html>