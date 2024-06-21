<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function userpayment(){
        $views = DB::table('course')->get();
        $data = DB::table('pay')->get();
        return view('user.auth.userpayment',compact('views','data'));
    }
}
