<?php


use App\Http\Controllers\Admin\BookingController;

use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PayController;
;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\HomeSampleCollectionController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\ForgetPasswordController;

use App\Http\Controllers\user\PopularController;
use App\Http\Controllers\user\RegistrationController;

use App\Http\Controllers\user\UserRegistrationController;

use App\Http\Controllers\Admin\RazorpayController;
use App\Http\Controllers\Admin\PaymentController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('dashboard');//admin
Route::get('admin/dashboard', [HomepageController::class,'index'])->name('admin.dashboard');
Route::post('/logout',[HomepageController::class,'logout'])->name('logout');
Route::get('admin', function () {return redirect('admin/login');});
Route::get('admin/login', [LoginController::class,'index'])->name('admin.login');
Route::post('/admin/login/store', [LoginController::class,'login'])->name('admin.login.store');
Route::get('admin/logout', [LogoutController::class,'index'])->name('admin.logout');
Route::get('admin/forget-password', [ForgetPasswordController::class,'index'])->name('admin.forget_password');

//corses
Route::get('admin/courses/view', [ServiceController::class,'index'])->name('admin.auth.courses.index');
Route::get('admin/courses/create', [ServiceController::class,'create'])->name('admin.auth.courses.create');
Route::post('admin/courses/store', [ServiceController::class,'store'])->name('admin.courses.store');
Route::get('admin/courses/edit/{id}', [ServiceController::class,'edit'])->name('admin.courses.edit');
Route::post('admin/courses/update/{id}', [ServiceController::class,'update']);
Route::get('admin/courses/delete/{id}', [ServiceController::class,'destroy']);
//payment
Route::get('admin/payment/view', [PayController::class,'index'])->name('admin.auth.payment.index');
Route::get('admin/payment/create', [PayController::class,'create'])->name('admin.auth.payment.create');
Route::post('admin/payment/store', [PayController::class,'store'])->name('admin.payment.store');
Route::get('admin/payment/edit/{id}', [PayController::class,'edit'])->name('admin.payment.edit');
Route::post('admin/payment/update/{id}', [PayController::class,'update']);
Route::get('admin/payment/delete/{id}', [PayController::class,'destroy']);

//booksample
// Route::post('user/booksample/create', [HomeSampleCollectionController::class,'store'])->name('user.booksample.store');

//booking
Route::get('admin/booking/cartindex', [BookingController::class,'cartindex'])->name('admin.auth.booking.cartindex');
Route::post('admin/cartindex/search', [BookingController::class,'search'])->name('admin.auth.cartindex.search');

//user
Route::get('user/register', [RegistrationController::class,'index'])->name('user.register');
Route::post('user/register/store', [RegistrationController::class,'store'])->name('user.registration.store');
Route::post('user/userreg/store', [UserRegistrationController::class,'store'])->name('user.userreg.store');
Route::post('login/check', [UserRegistrationController::class, 'loginCheck'])->name('user.login.check');
Route::post('/logout', [UserRegistrationController::class, 'logout'])->name('logout');


//razorpay
Route::get('userwelcome', [PopularController::class,'index'])->name('userwelcome');
Route::get('userpay', [PopularController::class,'userpayment'])->name('userpayment');
Route::post('razorpay-payment',[RazorpayController::class,'store'])->name('razorpay.payment.store');
Route::get('/payment/receipt', [PaymentController::class,'showReceipt'])->name('receipt');
