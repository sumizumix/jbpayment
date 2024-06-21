<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Test;
class HomepageController extends Controller
{
    public function index()
    {
 
        $productCount = DB::table('course')->count();    
        $prescriptionCount = DB::table('pay')->count();
        return view('pages.admindashboard',compact('productCount','prescriptionCount'));
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token
        return route('dashboard'); // Redirect to the homepage or any other page
    }
}
