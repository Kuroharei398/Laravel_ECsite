@extends('layout_header')

@section('header_title', '商品一覧')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">

<body>
    @section('content')
    <div class="container">
        @foreach($products_Data as $_products_Data)
        <div class="sub_container">
            <div class="product_img">{{ $_products_Data->image_path }}</div>
            <div class="product_category">{{ $_products_Data->category->category_name }}</div>
            <div class="product_name">{{ $_products_Data->name }}</div>
            <div class="product_price">￥{{ number_format($_products_Data->price) }}</div>
            <div class="product_stock">在庫数：{{ $_products_Data->stock }}</div>
            <div>
                <form method="GET" action="{{ route('product_detail', $_products_Data->id) }}">
                    @csrf
                    <button class="product_button" type="submit">商品詳細へ</button>
                </form>
            </div>
            <div class="product_description">{{ $_products_Data->description }}</div>
        </div>
        @endforeach
    </div>
    @endsection
</body>
</html>