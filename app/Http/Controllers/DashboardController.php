<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function error($error = "Error thrown")
    {
        return redirect('/dashboard')->with('error', $error);
    }

    public function success($success = "Success thrown")
    {
        return redirect('/dashboard')->with('success', $success);
    }
}
