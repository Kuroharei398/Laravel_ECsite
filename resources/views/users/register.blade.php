<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アカウント登録</title>
</head>
<body>
    <div>
        <h1>登録画面</h1>
    </div>
    <div>
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif

        <form method="POST" action="{{ route('regist.user') }}">
            @csrf
            <label for="mail_address">メールアドレス</label>
            <input type="email" name="mail_address" id="mail_address" required>

            <label for="password">パスワード</label>
            <input type="text" name="password" id="password" required>

            <label for="user_name">名前</label>
            <input type="text" name="user_name" id="user_name" required>

            <button type="submit">登録</button>
        </form>
    </div>
</body>
</html>