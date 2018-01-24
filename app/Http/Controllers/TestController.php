<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function ajax()
    {
        return view('test.ajax');
    }

    public function login(Request $request)
    {
        return $request;
    }
}
