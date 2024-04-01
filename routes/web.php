<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventController;
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
Route::get('/d-long-term-program',function(){
    return view('d-long-term-program');
});

Route::get('/the-color-world',function(){
    return view('the-color-world');
});
Route::get('/the-little-project',function(){
    return view('the-little-project');
});
Route::get('/creative-toddler-program',function(){
    return view('creative-toddler-program');
});

Route::get('/d-kids-weekend-program',function(){
    return view('d-kids-weekend-program');
});
Route::get('/easter-sensory',function(){
    return view('easer-sensory');
});
Route::get('/young-artist-club',function(){
    return view('young-artist-club');
});
Route::get('/private-art-party',function(){
    return view('private-art-party');
});

Route::get('/wall-art-workshop',function(){
    return view('wall-art-workshop');
});






Route::get('/a-weekend-program',function(){
    return view('a-weekend-program');
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
    Route::post('/creative-toddler-payment-page','creativeToddlerPaymentShow')->name('creativetoddler.payment.information.show');
    Route::post('/little-project-payment-page','theLittleProjectPaymentShow')->name('theLittleProject.payment.information.show');
    Route::post('/the-color-world-payment-page','theColorWorldPaymentShow')->name('theColorWorld.payment.information.show');
    Route::post('/young-artist-club-payment-page','youngArtistClubPaymentShow')->name('youngArtistClub.payment.information.show');

    Route::post('/artwork-initiate-payment','dKidsInitiatePayment')->name('artwork.initiatePayment');
    Route::post('/artwork-connfirm-payment','dKidsConnfirmPayment')->name('artwork.payment.validate');
});

// Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
// Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');


Route::controller(RegistrationController::class)->group(function(){
    Route::post('class-registration','classRegistration')->name('class.register');
    Route::post('save-contact-us','saveContactUs')->name('user.contactUs');
});


Route::get('/events-calender',[EventController::class,'getEventCalender'])->name('events.calender');

Route::get('/book-now',function(){
    return view('book2');
});
Route::get('/book-now-2',function(){
    return view('book');
});




/***           Admin  Routes  */


Route::get('admin/',[AdminController::class,'index']);
Route::prefix('admin')->controller(AdminController::class)->group(function(){
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
        //event route

        Route::resource('/events',EventController::class);
    });

});

Route::get('/{any}', function () {
    return view('index');
});
// Route::fallback('App\Http\Controllers\HomeController@index')->name('fallback');


