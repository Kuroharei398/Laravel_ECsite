@extends('layout_header')

@section('header_title', '管理側購入履歴')

<body>
    @section('content')
    <div>
        <h1>注文管理画面</h1>
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
                    <th>注文ステータス</th>
                    <th>個数</th>
                    <th>合計金額</th>
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
                    <td>
                        @if($_orders_Data->order_status === 0)
                            発送準備中
                        @elseif($_orders_Data->order_status === 1)
                            {{ $_orders_Data->updated_at->addDays($_orders_Data->m_prefecture->m_delivery_date->delivery_date)->format('Y-m-d H:i:s') }}にお届け予定
                        @endif
                    </td>
                    <td>{{ $_orders_Data->quantity }}</td>
                    <td>{{ $_orders_Data->total_price }}</td>
                    <td>{{ $_orders_Data->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $_orders_Data->updated_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin_orders.orderStatus_Update', $_orders_Data->id) }}">
                            @csrf
                            <label for="order_status">注文ステータス</label>
                            <select name="order_status" id="order_status">
                                <option value="0">発送準備中</option>
                                <option value="1">発送済み</option>
                            </select>
                            <button type="submit">変更</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <form method="GET" action="{{ route('admin.top') }}">
            @csrf
            <button type="submit">管理者トップページ</button>
        </form>
    </div>
    @endsection
</body>
</html>