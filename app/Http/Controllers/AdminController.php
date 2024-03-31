<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Artwork;
use App\Models\Booking;
use App\Models\ClassRegistration;
use App\Models\ContactUs;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Throwable;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function AdminLogin(Request $request){
       
        //code...

        // dd(Hash::make("Admin123@2022"));
        $pwd = "Admin123@2022";
        $validation = $request->validate([
            'admin_email' => ['required', 'email','exists:admins,email'],
            'password' => ['required'],
        ],[
            'admin_email.required'=>'Please enter your email!',
            'admin_email.email' => 'Please enter a valid email!',
            'password.required' => 'Please enter your password!'
        ]);

        $credentials = [
            'email' => $request->post("admin_email"),
            'password' =>  $request->post("password"),
        ];

        // dd($request->all());
        $admin = Admin::where('email', $request->post("admin_email"))->first();
        // dd($admin->password);
        // dd(Hash::check($request->password, $admin->password));
        // dd(auth()->guard('admin')->attempt($credentials));

        if(Auth::guard('admin')->attempt($credentials)) {

            $request->session()->regenerate();
            return redirect('/admin/home');
            // return redirect()->intended('dashboard');
        }
        
        return back()->withErrors([
            'admin_credentials' => 'The provided credentials do not match our records.',
        ])->onlyInput('admin_email');
     }
    public function AdminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
       return redirect('/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        dd(Auth::guard('admin')->user());
    }

    public function index(Request $request)
    {
        if(Auth::guard('admin')->check()){

            return redirect('/admin/dashboard');
        }
        return view('admin.index');
    }

    public function getRegisteredUser(Request $request)
    {
        $data = User::get();
        // dd($data);
        return view('admin.register_customer',compact('data'));
    }


    public function getSlotBookingData(Request $request)
    {
        $data = Booking::get();
        return view('admin.slot',compact('data')); 
    }


    public function getPaidUsers(Request $request)
    {
        $data = Artwork::get();

        // dd($data);
        return view('admin.artwork',compact('data'));
    }


    public function manualBooking(Request $request)
    {
        return view('admin.Manual');
    }

    public function saveManualBooking(Request $request){

        $userInput = $request->only(['name','mobile','date','timeslot']);
        // dd($userInput);
        $validation = $request->validate([
            'name' => ['required'],
            'mobile' =>['required'],
            'date' => ['required'],
            'timeslot' => ['required']
        ]);

        $booking = Booking::where(['slot_date'=>$request->date,'slot_time' => $request->timeslot])->first();
        if($booking){
            Session::flash('bookedError', "Already Booked");
            return Redirect::back();
        }else{
           $save =  Booking::create($userInput);
            if($save){
                Session::flash('success', "Booking Successfull");
                return Redirect::back();
            }

        }
        Session::flash('bookedError', "Something went wrong! Please try after sometime");
        return Redirect::back();
    }
    public function getContactUsData(Request $request){
        $data = ContactUs::get();
        return view('admin.contact_us',compact('data'));
    }

   
}
