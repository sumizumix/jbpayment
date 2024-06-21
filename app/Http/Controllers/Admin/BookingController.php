<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Cart;

use App\Models\Bookpackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Mail\PackageApproved;
use App\Mail\PackageRejected;

use Illuminate\Support\Facades\Mail;
use DB;

class BookingController extends Controller
{    
    public function cartindex()
    { 
    $cart=DB::table('payment')->select('payment.*','course.*','pay.*','pay.name as fname','course.name as coname','payment.name as pname')->
    join('course','course.id','=','payment.cname')->
    join('pay','pay.id','=','payment.ctype')->get();
    // $cart=DB::table('payment')->get();
    return view('admin.auth.booking.cartindex', compact('cart'));
       
    }
   
}
