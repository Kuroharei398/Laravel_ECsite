@extends('layout_header')

@section('header_title', '管理者トップページ')

<body>
    @section('content')
    <div>
        <h1>管理者トップページ</h1>
    </div>
    <div>
        <form method="GET" action="{{ route('admin.products') }}">
            @csrf
            <button type="submit">管理側商品</button>
        </form>
        <form method="GET" action="{{ route('admin.categories') }}">
            @csrf
            <button type="submit">カテゴリー一覧</button>
        </form>
        <form method="GET" action="{{ route('admin.users') }}">
            @csrf
            <button type="submit">ユーザー管理</button>
        </form>
        <form method="GET" action="{{ route('admin.orders') }}">
            @csrf
            <button type="submit">注文管理</button>
        </form>
    </div>
    @endsection
</body>
</html>