<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class HomeController extends Controller
{
    public function index()
    {  
        return view('welcome');
    }
    
    
}
