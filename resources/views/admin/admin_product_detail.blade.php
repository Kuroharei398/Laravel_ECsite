@extends('layout_header')

@section('header_title', '管理側商品詳細')

<body>
    @section('content')
    <div>
        <h1>管理側商品詳細</h1>
    </div>
    <div>
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('products_detail.update' , ['id' => $product->id]) }}">
            @csrf
            <label for="name">商品名</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>

            <label for="description">商品説明</label>
            <input type="text" name="description" id="description" value="{{ $product->description }}" required>

            <label for="price">価格</label>
            <input type="text" name="price" id="price" value="{{ $product->price }}" required>

            <label for="stock">在庫</label>
            <input type="text" name="stock" id="stock" value="{{ $product->stock }}" required>

            <button type="submit">更新</button>
        </form>
    </div>
    <div>
        <form method="POST" action="{{ route('products_detail.deleate', $product->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
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