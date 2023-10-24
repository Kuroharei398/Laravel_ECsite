<?php

namespace App\Http\Controllers\users;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    public function view_login()
    {
        return view('\users\login');
    }

    public function login(Request $request)
    {
         // ユーザーからの入力を検証
        $request->validate([
            'mail_address' => ['required', 'string'], // ユーザー名は必須
            'password' => ['required'], // パスワードは必須
        ]);

        // ユーザー認証を試みる
        $credentials = $request->only('mail_address', 'password');

        if (Auth::attempt($credentials)) {
            // 認証に成功した場合

            // セッションを再生成してセキュリティ向上
            $request->session()->regenerate();

            // 元の要求されたURLにリダイレクト
            return redirect()->intended('top');
        }

        // 認証に失敗した場合、ログインフォームに戻る
        return back()->withInput()->withErrors(['user_name' => 'メールアドレスまたはパスワードが無効です。']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
