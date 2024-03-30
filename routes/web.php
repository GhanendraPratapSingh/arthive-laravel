<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/career',function(){
    return view('career');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/d-kids-art-labs',function(){
    return view('kids.d-kids-art-labs');
});
Route::get('/d-toddler-labs',function(){
    return view('toddler.d-toddler-labs');
});
Route::get('/a-art-cafe',function(){
    return view('adults.a-art-cafe');
});
Route::get('/a-long-term-program',function(){
    return view('a-long-term-program');
});


Route::controller(BookingController::class)->group(function(){

    Route::get('/calender-art-hour','getKidsCalender')->name('ArtHour.Calender');
    Route::get('/kids-slot-booking/{date}','kidsSlotBookingPage');
    Route::post('/save-kids-slot-data','saveKidsSlotData')->name('timeslot.bookingDetails');
    Route::post('/kids-payment-process','kidsPaymentProcess');

    // kids information
    Route::post('/kids-payment-page','dKidsPaymentShow')->name('kids.payment.information.show');
    Route::post('/toddler-payment-page','toddlerPaymentShow')->name('toddler.payment.information.show');
    Route::post('/artwork-initiate-payment','dKidsInitiatePayment')->name('artwork.initiatePayment');
    Route::post('/artwork-connfirm-payment','dKidsConnfirmPayment')->name('artwork.payment.validate');
});

// Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
// Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');


Route::controller(RegistrationController::class)->group(function(){
    Route::post('class-registration','classRegistration')->name('class.register');
    Route::post('save-contact-us','saveContactUs')->name('user.contactUs');
});


Route::get('/workshop-calender',function(){
    return view('calender2');
});

Route::get('/book-now',function(){
    return view('book2');
});
Route::get('/book-now-2',function(){
    return view('book');
});




/***           Admin  Routes  */


Route::get('admin/',[AdminController::class,'index']);
Route::prefix('admin')->controller(AdminController::class)->group(function(){
    
    Route::get('/',function(){
        dd('ye');

    })->name('admin.index');
    // Route::fallback(function () {
    //     // Handle the case where there's no matching route
    //     dd('fd');
    // });
    Route::get('/login','index')->name('login');

    
    Route::post('/admin-login','AdminLogin')->name('admin.login');
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard',function(){
            return view('admin.welcome');
        });
        Route::get('/home','index')->name('admin.home');
        Route::get('/logout','AdminLogout');
        Route::get('registered-users','getRegisteredUser');
        Route::get('/slot-bookings','getSlotBookingData');
        Route::get('/artwork','getPaidUsers');
        Route::get('/mannual-booking','manualBooking');
        Route::post('/save-mannual-booking','saveManualBooking')->name('admin.mannual.register');
        Route::get('/contact-us','getContactUsData')->name('admin.contactUs');
        // Route::get('/{any}','index')->where('any', '.*');
    });

});


// Route::fallback('App\Http\Controllers\HomeController@index')->name('fallback');