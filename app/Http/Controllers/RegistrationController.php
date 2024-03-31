<?php

namespace App\Http\Controllers;

use App\Models\ClassList;
use App\Models\ClassRegistration;
use App\Models\ContactUs;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;

class RegistrationController extends Controller
{
    
    public function classRegistration(Request $request){
        DB::beginTransaction();
        $validation = $request->validate([
            'name' => "required|",
            'age' => "required|numeric|size:2",
            'mobile' => "required|digits:10|regex:/(0)[0-9]/|not_regex:/[a-z]/",
            'email' => "required|email",
            'class_id' => "required|exists:class_lists,id",
        ]);
        try {
            
            $classModel = ClassList::whereId($request->class_id)->first();
            $price = $classModel->amount;
            $amount = $price*100;
            $razorpaySecretId = config('globals.razorpay_secret_id');
            $razorpaySecretKey = config('globals.razorpay_secret_key');
            $api = new Api($razorpaySecretId, $razorpaySecretKey);
    
            $dateArray = [
                'receipt' =>  'order_receipt_' .uniqid(), 
                'amount' => $amount, 
                'currency' => 'INR', 
                'notes'=> array('Section'=> 'kids')
            ];
    
            $createOrder = $api->order->create($dateArray);
            
            $userModel = User::create([
                'name' => $request->name,
                'email' =>$request->email,
                'mobile' => $request->mobile,
                'user_type' => 'KIDS_CLASS_USER',
                'age' =>$request->age,
            ]);
            $paymentModel = Payment::create([
                'user_id' => $userModel->id,
                'order_id' => $createOrder->receipt,
                'razorpay_payment_id' => null,
                'razorpay_order_id' => $createOrder->id,
                'payment_amount' => $price,
                'payment_mode' => 'online',
                'order_type' => 'KIDS_CLASS_REGISTRATION',
                'payment_status' => 'pending'
            ]);
    
            ClassRegistration::create([
                'user_id' => $userModel->id,
                'payment_id' =>$paymentModel->id,
                'class_name' =>$classModel->id
            ]);
    
            $dateArray = [
                'amount' => $amount,
                'order_id' => $createOrder->id,
                'apiKey' => $razorpaySecretId,
                'receipt' => $createOrder->receipt,
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'user_type' => 'KIDS_CLASS_USER',
                'payment_id' => $paymentModel->id,
                'content_type' => 'KIDS_CLASS_REGISTER'
            ];
    
            
            
            if($price<=0){
                return redirect()->back();
            }
            DB::commit();
            return view('payment.payment',$dateArray);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back();
        }

    }


    public function saveContactUs(Request $request){
        $validation = $request->validate([
            'fname' => ['required'],
            'lname' => ['required'],
            'mob' => ['required'],
            'msg' => ['required'],
        ]);

        $data =[
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'mobile' => $request->mob,
            'message' =>$request->msg,
        ];
        $isContacted = ContactUs::create($data);
        if($isContacted){
            // Session::flash('contactUsSuccess', "Thanks For Registering");
            toastr()->success('Thanks For Registering');
            return redirect()->back();
            // return redirect()->back()->with('alert','Thanks For Registering');
            
        }
        // Session::flash('contactUsError', "Something went wrong!");
        toastr()->error('Something went wrong!');
        return redirect()->back();
        // return redirect()->back()->with('alert','Something went wrong!');
        // return Redirect::back();
    }
}
