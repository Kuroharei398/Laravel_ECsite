<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminTopController extends Controller
{
    public function view_admintop()
    {
        if (Auth::user()->user_authority !== 1) {
            return redirect()->route('top'); // リダイレクト先を設定
        }

        return view('\admin\admin_top');
    }
}