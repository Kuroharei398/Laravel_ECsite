@extends('layout_header')

@section('header_title', '管理側商品一覧')

<body>
    @section('content')
    <div>
        <h1>管理側商品一覧</h1>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品カテゴリ</th>
                    <th>商品名</th>
                    <th>商品説明</th>
                    <th>価格</th>
                    <th>在庫</th>
                    <th>商品画像</th>
                    <th>商品状態</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products_Data as $_products_Data)
                <tr>
                    <td>{{ $_products_Data->id }}</td>
                    <td>{{ $_products_Data->category_id }}</td>
                    <td>{{ $_products_Data->name }}</td>
                    <td>{{ $_products_Data->description }}</td>
                    <td>{{ $_products_Data->price }}</td>
                    <td>{{ $_products_Data->stock }}</td>
                    <td>{{ $_products_Data->image_path }}</td>
                    <td>{{ $_products_Data->product_status }}</td>
                    <td>
                        <form method="GET" action="{{ route('admin.product_detail', $_products_Data->id) }}">
                            @csrf
                            <button type="submit">詳細へ</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('products.addition') }}">
            @csrf
            <label for="name">商品名</label>
            <input type="text" name="name" id="name" required>

            <label for="description">商品説明</label>
            <input type="text" name="description" id="description" required>

            <label for="price">価格</label>
            <input type="text" name="price" id="price" required>

            <label for="stock">在庫</label>
            <input type="text" name="stock" id="stock" required>

            <label for="category_name">カテゴリー</label>
            <select name="category_name" id="category_name">
                @foreach($categories_Data as $category_Data)
                    <option value="{{ $category_Data->id }}">{{ $category_Data->category_name }}</option>
                @endforeach
            </select>

            <button type="submit">登録</button>
        </form>
    </div>
    <div>
        <form action="{{ route('products.search') }}" method="GET">
            <input type="text" name="keyword">
            <input type="submit" value="検索">
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