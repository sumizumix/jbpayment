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
use Illuminate\Support\Carbon;

use Razorpay\Api\Api;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Mail;
use DB;
use Exception;

class RazorpayController extends Controller
{

    public function store(Request $request)
    {


        $input = $request->all();


        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                $course = DB::table('course')->where('id', $input['cname'])->first();
                $pay = DB::table('pay')->where('id', $input['ctype'])->first();
    
                // Creating the PaymentModel record
                $payment = PaymentModel::create([
                    'r_payment_id' => $response['id'],
                    'method' => $response['method'],
                    'currency' => $response['currency'],
                    'user_email' => $response['email'],
                    'amount' => $response['amount'] / 100,
                    'json_response' => json_encode((array) $response),
                    'userid' => Auth::id(),
                    'cname' => $input['cname'],
                    'ctype' => $input['ctype'],
                    'name' => $input['name'],
                    'regno' => $input['regno'],
                    'email' => $input['email'],
                ]);

                // Passing data to the view
                return view('pages.reciept', [
                    'r_payment_id' => $response['id'],
                    'method' => $response['method'],
                    'currency' => $response['currency'],
                    'user_email' => $response['email'],
                    'amount' => $response['amount'] / 100,
                    'json_response' => json_encode((array) $response),
                    'userid' => Auth::id(),
                    'cname' => $course->name,
                    'ctype' => $pay->name,
                    'name' => $input['name'],
                    'regno' => $input['regno'],
                    'email' => $input['email'],
                    // 'created_at' => Carbon::now(),
                    'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                ]);
            } catch (Exception $e) {
                return $e->getMessage();
                Session::put('error', $e->getMessage());
                return back()->with('error', 'Payment failed!');
            }
        }
        return back()->with('success', 'Payment successful!');
    }
}
