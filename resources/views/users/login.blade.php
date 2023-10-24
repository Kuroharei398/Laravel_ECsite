<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン</title>
</head>
<body>
    <div>
        <h1>ログイン画面</h1>
    </div>
    <div>
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif

        <form method="POST" action="{{ route('login.user') }}">
            @csrf
            <label for="mail_address">メールアドレス</label>
            <input type="email" name="mail_address" id="mail_address" required>

            <label for="password">パスワード</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">ログイン</button>
        </form>
    </div>
</body>
</html>