<?php

namespace App\Http\Controllers;

use App\Models\UserSubscribedPlan;
use App\Models\SlotBooking;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;
use Throwable;

class BookingController extends Controller
{


    public function getKidsCalender(Request $request)
    {
        try {
            $now = Carbon::now();
            $type = $request->type ?? 'next';
            $month = $request->month ?? (clone $now)->format('m');
            $year = $request->year ?? (clone $now)->format('Y');

            $selectedDate = Carbon::createFromDate($year,$month,1);
            $previousDate =  (clone $selectedDate)->subMonth();
            $nextDate =  (clone $selectedDate)->addMonth();


            $currentDate = (clone $now);





            $nextMonth =  $month + 1;
            // dd($currentMonth->daysInMonth);

            $data = compact('month', 'year', 'selectedDate', 'previousDate', 'nextDate');
            // dd($data);
            return view('calender', $data);
        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function kidsSlotBookingPage(Request $request, $date)
    {

        return view('book', compact('date'));
    }

    public function saveKidsSlotData(Request $request)
    {
        $validation = $request->validate([
            'name' => ['required'],
            'mobile' => ['required'],
            'timeslot' => ['required'],
            'quantity' =>['required'],
            'email' => ['required'],
        ]);

        try {

            // dd($request->all());
            $date = $request->date;
            $name = $request->name;
            $mobile = $request->mobile;
            $timeslot = $request->timeslot ?? "";
            $quantity = $request->quantity;
            $email = $request->email;
            $bookedSlotsQuantity = SlotBooking::where(['slot_date' => $date, 'slot_time' => $timeslot])->sum('quantity');

            if ($quantity > 10) {
                Session::flash('bookingError', "Only 10 slots can be booked at a time");
                return Redirect::back();
            } else if ($bookedSlotsQuantity > 10) {
                Session::flash("bookingError", "The slot is now full. You can book some other slot or contact us with your query. Thank You!");
                return Redirect::back();
            } else if ($bookedSlotsQuantity + $quantity > 10) {
                $totalSlots = 10;
                Session::flash("bookingError", "Only " . ($totalSlots - $bookedSlotsQuantity) . "  slot  available in this time slot !! ");
                return Redirect::back();
            } else {

                $razorpaySecretId = config('globals.razorpay_secret_id');
                    $razorpaySecretKey = config('globals.razorpay_secret_key');
                    $api = new Api($razorpaySecretId, $razorpaySecretKey);
                    $userType = $request->user_type ?? 'KIDS_USER';
                    $orderType = $request->order_type ?? 'KIDS_ART';
                    $amount = 500 * $quantity;
                    $dateArray = [
                        'receipt' =>  'order_receipt_' . uniqid(),
                        'amount' => $amount * 100,
                        'currency' => 'INR',
                        'notes' => array('Section' => 'kids', 'quantity' => $quantity)
                    ];
                    $userModel = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'mobile' => $request->mobile,
                        'user_type' => 'KIDS_SLOT',
                    ]);

                    $createOrder = $api->order->create($dateArray);

                    $paymentModel = Payment::create([
                        'user_id' => $userModel->id,
                        'order_id' => $createOrder->receipt,
                        'razorpay_payment_id' => null,
                        'razorpay_order_id' => $createOrder->id,
                        'payment_amount' => $amount,
                        'payment_mode' => 'online',
                        'order_type' => 'KIDS_SLOT',
                        'payment_status' => 'pending'
                    ]);
                    $bookingData = [
                        'user_id' => $userModel->id,
                        'payment_id' => $paymentModel->id,
                        'slot_date' => $date,
                        'slot_time' => $timeslot,
                        'quantity' => $quantity,
                        'booking_type' => 'KIDS_SLOT',

                    ];
                    $createBooking = SlotBooking::create($bookingData);
                    $dateArray = [
                        'amount' => $amount,
                        'order_id' => $createOrder->id,
                        'apiKey' => $razorpaySecretId,
                        'receipt' => $createOrder->receipt,
                        'name' => $name,
                        'email' => $email,
                        'mobile' => $mobile,
                        'user_type' => 'KIDS_SLOT_USER',
                        'payment_id' => $paymentModel->id,
                        'content_type' => 'KIDS_CLASS_REGISTER'
                    ];
                    return view('payment.payment', $dateArray);


                if ($bookedSlotsQuantity + $quantity >= 10) {
                    
                } else {
                    Session::flash('bookingError', "Something went wrong! Please try after sometime");
                    return Redirect::back();
                }
                // }else{

                // }
            }
        } catch (Throwable $e) {
            // return back();
            dd($e->getMessage());
        }
    }

    public function dKidsPaymentShow(Request $request)
    {
        $price = $request->price ?? 0;
        $order_type = 'KIDS_ART';
        $user_type = 'KIDS_USER';
        $content_type = 'KIDS_ART_SUBSCRIPTION';
        if ($price <= 0) {
            return redirect()->back();
        }
        return view('payment.information', compact('price', 'user_type', 'order_type', 'content_type'));
    }
    public function toddlerPaymentShow(Request $request)
    {
        $price = $request->price ?? 0;
        $order_type = 'TODDLER_ART';
        $user_type = 'TODDLER_USER';
        $content_type = 'TODDLER_ART_SUBSCRIPTION';
        if ($price <= 0) {
            return redirect()->back();
        }
        return view('payment.information', compact('price', 'user_type', 'order_type', 'content_type'));
    }
    public function creativeToddlerPaymentShow(Request $request)
    {
        $price = $request->price ?? 0;
        $order_type = 'CREATIVE_TODDLER_ART';
        $user_type = 'CREATIVE_TODDLER_USER';
        $content_type = 'CREATIVE_TODDLER_ART_SUBSCRIPTION';
        if ($price <= 0) {
            return redirect()->back();
        }
        return view('payment.information', compact('price', 'user_type', 'order_type', 'content_type'));
    }
    public function theLittleProjectPaymentShow(Request $request)
    {
        $price = $request->price ?? 0;
        $order_type = 'THE_LITTLE_PROJECT';
        $user_type = 'THE_LITTLE_PROJECT_USER';
        $content_type = 'THE_LITTLE_PROJECT_SUBSCRIPTION';
        if ($price <= 0) {
            return redirect()->back();
        }
        return view('payment.information', compact('price', 'user_type', 'order_type', 'content_type'));
    }

    public function theColorWorldPaymentShow(Request $request)
    {
        $price = $request->price ?? 0;
        $order_type = 'THE_COLOR_WOLRD';
        $user_type = 'THE_COLOR_WOLRD_USER';
        $content_type = 'THE_COLOR_WOLRD_SUBSCRIPTION';
        if ($price <= 0) {
            return redirect()->back();
        }
        return view('payment.information', compact('price', 'user_type', 'order_type', 'content_type'));
    }
    public function youngArtistClubPaymentShow(Request $request)
    {
        $price = $request->price ?? 0;
        $order_type = 'YOUNG_ARTIST_CLUB';
        $user_type = 'YOUNG_ARTIST_USER';
        $content_type = 'YOUNG_ARTIST_SUBSCRIPTION';
        if ($price <= 0) {
            return redirect()->back();
        }
        return view('payment.information', compact('price', 'user_type', 'order_type', 'content_type'));
    }

    public function adultsLongTermPaymentShow(Request $request)
    {
        $price = $request->price ?? 0;
        $order_type = 'ADULTS_LONG_TERM_PROGRAM';
        $user_type = 'ADULTS_LONG_TERM_PROGRAM_USER';
        $content_type = 'ADULTS_LONG_TERM_PROGRAM_SUBSCRIPTION';
        if ($price <= 0) {
            return redirect()->back();
        }
        return view('payment.information', compact('price', 'user_type', 'order_type', 'content_type'));
    }
    
    
    
    
    public function dKidsInitiatePayment(Request $request)
    {

        try {
            //code...
            DB::beginTransaction();
            //regex:/(0)[0-9]/|not_regex:/[a-z]/
            $validation = $request->validate([
                'name' => "required|",
                'mobile' => "required|digits:10",
                'email' => "required|email",
            ]);
            $price = $request->price ?? 0;
            $amount = $price * 100;
    
    
            $razorpaySecretId = config('globals.razorpay_secret_id');
            $razorpaySecretKey = config('globals.razorpay_secret_key');
            $api = new Api($razorpaySecretId, $razorpaySecretKey);
            $userType = $request->user_type ?? 'KIDS_USER';
            $orderType = $request->order_type ?? 'KIDS_ART';
    
            $dateArray = [
                'receipt' =>  'order_receipt_' . uniqid(),
                'amount' => $amount,
                'currency' => 'INR',
                'notes' => array('Section' => 'kids')
            ];
            $userModel = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'user_type' => $userType,
            ]);
    
    
            $createOrder = $api->order->create($dateArray);
    
            $paymentModel = Payment::create([
                'user_id' => $userModel->id,
                'order_id' => $createOrder->receipt,
                'razorpay_payment_id' => null,
                'razorpay_order_id' => $createOrder->id,
                'payment_amount' => $price,
                'payment_mode' => 'online',
                'order_type' => $orderType,
                'payment_status' => 'pending'
            ]);
    
            $artHourSubscription = UserSubscribedPlan::create([
                'user_id' => $userModel->id,
                'payment_id' => $paymentModel->id,
                'type' => $orderType
            ]);
    
            // $dateArray['order_id'] = $createOrder->id;
            // $dateArray['apiKey'] = $razorpaySecretId;
            // $dateArray['receipt'] =  $createOrder->receipt;
            $dateArray = [
                'amount' => $amount,
                'order_id' => $createOrder->id,
                'apiKey' => $razorpaySecretId,
                'receipt' => $createOrder->receipt,
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'user_type' => $userType,
                'payment_id' => $paymentModel->id,
                'content_type' =>$userType
            ];
    
    
    
            if ($price <= 0) {
                return redirect()->back();
            }
    
            DB::commit();
            return view('payment.payment', $dateArray);
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th->getMessage());
            return back();
        }
    }

    public function dKidsConnfirmPayment(Request $request)
    {
        try {
            // print_r($request->all());
            $razorpay_payment_id = $request->input('razorpay_payment_id');
            $razorpay_order_id = $request->input('razorpay_order_id');
            $razorpay_signature = $request->input('razorpay_signature');
            $order_id = $request->input('tracking_number');
            $razorpaySecretId = config('globals.razorpay_secret_id');
            $razorpaySecretKey = config('globals.razorpay_secret_key');

            $content_type = $request->content_type ?? "";

            $generated_signature = hash_hmac('sha256', $razorpay_order_id . "|" . $razorpay_payment_id, $razorpaySecretKey);
            $is_payment_success  = false;
            if ($generated_signature == $razorpay_signature) {
                $is_payment_success = true;
            }
            Payment::where(['razorpay_order_id' => $razorpay_order_id, 'order_id' => $order_id])->update([
                'razorpay_payment_id' => $razorpay_payment_id,
                'payment_status' => $is_payment_success ? 'success' : 'failed',
                'razorpay_signature' => $razorpay_signature
            ]);

            $message = getPaymentSuccessMessage($content_type);
            if ($is_payment_success) {
                return view('payment.thank-you', compact('message', 'order_id'));
            }
            dd("something went wrong");
        } catch (Throwable $e) {
            dd($e->getMessage());
        }
    }
}
