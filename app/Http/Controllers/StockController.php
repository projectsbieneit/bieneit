<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function chart()
    {
      $result =DB::table('goods')->groupBy('name')
                  ->get();
                  error_log($result);
      return response()->json($result);
    }
}
