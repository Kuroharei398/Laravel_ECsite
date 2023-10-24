@extends('layout_header')

@section('header_title', 'トップページ')

<body>
    @section('content')
    <div>
        <h1>トップページ</h1>
    </div>
    <div>
        <form method="GET" action="{{ route('products') }}">
            @csrf
            <button type="submit">商品画面</button>
        </form>
        <form method="GET" action="{{ route('orders') }}">
            @csrf
            <button type="submit">購入履歴画面</button>
        </form>
    </div>
    @endsection
</body>
</html>