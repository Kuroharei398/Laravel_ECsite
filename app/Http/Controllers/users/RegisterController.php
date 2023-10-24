<?php

namespace App\Http\Controllers\users;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function view_regist()
    {
        return view('\users\register');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'mail_address' => $request->input('mail_address'),
            'password' => Hash::make($request->input('password')),
            'user_name' => $request->input('user_name'),
        ]);

        Auth::login($user);

        return redirect()->route('top');
    }
}
