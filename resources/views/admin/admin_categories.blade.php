@extends('layout_header')

@section('header_title', '管理側カテゴリー一覧')

<body>
    @section('content')
    <div>
        <h1>管理側カテゴリー一覧</h1>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品カテゴリ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories_Data as $_categories_Data)
                <tr>
                    <td>{{ $_categories_Data->id }}</td>
                    <td>{{ $_categories_Data->category_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif
        
        <form method="POST" action="{{ route('admin_categories.category_Addition') }}">
            @csrf
            <label for="category_name">カテゴリー名</label>
            <input type="text" name="category_name" id="category_name" required>

            <button type="submit">追加</button>
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