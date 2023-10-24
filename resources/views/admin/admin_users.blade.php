@extends('layout_header')

@section('header_title', 'ユーザー管理')

<body>
    @section('content')
    <div>
        <h1>ユーザー管理画面</h1>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>メールアドレス</th>
                    <th>ユーザー名</th>
                    <th>権限</th>
                    <th>ステータス</th>
                    <th>作成日時</th>
                    <th>更新日時</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users_Data as $_users_Data)
                <tr>
                    <td>{{ $_users_Data->id }}</td>
                    <td>{{ $_users_Data->mail_address }}</td>
                    <td>{{ $_users_Data->user_name }}</td>
                    <td>{{ $_users_Data->user_authority }}</td>
                    <td>{{ $_users_Data->user_status }}</td>
                    <td>{{ $_users_Data->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $_users_Data->updated_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin_users.authority_Update', $_users_Data->id) }}">
                            @csrf
                            <label for="authority">ユーザー権限</label>
                            <select name="user_authority" id="authority">
                                @foreach($authorities as $_authority)
                                    <option value="{{ $_authority }}">{{ $_authority }}</option>
                                @endforeach
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