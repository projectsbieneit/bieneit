<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        error_log(Auth::user()->id());
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        error_log(Auth::user()->id());
        // $email = DB::table('users')->where('id', Auth::user()->id() )->value('email');
        return redirect('dashboard');
    }
}
