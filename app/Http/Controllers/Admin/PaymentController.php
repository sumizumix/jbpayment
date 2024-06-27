<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Bookpackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Mail\PackageApproved;
use App\Mail\PackageRejected;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentModel;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Session; // Use Laravel's Session facade
use Illuminate\Support\Facades\Mail;
use DB;
use Exception;

class PaymentController extends Controller
{
    public function showReceipt() {
       
            $paymentDetails = Session::get('payment');
            //  $cart=DB::table('payment')->get();
             $cart=DB::table('payment')->select('payment.*','course.*','pay.*','course.name as coname','payment.name as pname','pay.name as payname')->
             join('course','course.id','=','payment.cname')->
             join('pay','pay.id','=','payment.ctype')->
             
             get();
             dd($cart);
            return view('pages.reciept', compact('paymentDetails','cart'));
       
    }
}
