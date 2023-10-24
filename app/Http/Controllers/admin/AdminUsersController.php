<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    public function view_adminUsers()
    {
        if (Auth::user()->user_authority !== 1) {
            return redirect()->route('top'); // リダイレクト先を設定
        }

        $users_Data = User::all();

        $authorities = range(0, 1);

        return view('\admin\admin_users' , compact('users_Data' , 'authorities'));
    }

    public function authority_Update(Request $request , $id)
    {
        User::find($id)->update([
            'user_authority' => $request->user_authority,
        ]);

        return redirect()->route('admin.users', compact('id'));
    }
}