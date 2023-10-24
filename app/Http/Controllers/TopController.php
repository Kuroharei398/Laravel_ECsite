<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class TopController extends Controller
{
    public function view_top()
    {
        return view('top');
    }
}