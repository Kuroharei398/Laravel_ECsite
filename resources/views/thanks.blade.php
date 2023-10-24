@extends('layout_header')

@section('header_title', '購入完了')

<body>
    @section('content')
    <div>
        <h1>購入完了画面</h1>
        <p>ありがとうございまてすと</p>
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