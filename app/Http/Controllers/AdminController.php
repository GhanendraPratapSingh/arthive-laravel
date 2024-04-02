<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Artwork;
use App\Models\Booking;
use App\Models\ClassRegistration;
use App\Models\ContactUs;
use App\Models\Registration;
use App\Models\SlotBooking;
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

    public function getClassRegisterations(Request $request)
    {
        $data = User::join('class_registrations','users.id','=','class_registrations.user_id')->select('users.id','users.name','users.email','users.mobile')->get();
        // dd($data);
        foreach($data as $d){
            // dd(($d->getSinglePaymentDetails));
        }
        return view('admin.class_registrations',compact('data'));
    }


    public function getSlotBookingData(Request $request)
    {
        $data = SlotBooking::get();
        // dd($data[0]->getUserDetails);
        return view('admin.slot-bookings',compact('data')); 
    }
    public function getKidsCreativeToddlerData(Request $request)
    {
        $data = User::join('user_subscribed_plans',function($join){
            $join->on('users.id','=','user_subscribed_plans.user_id')
            ->where('type','CREATIVE_TODDLER_ART');
        })->select('users.id','users.name','users.email','users.mobile')->get();
        // dd($data[0]->getUserDetails);
        return view('admin.kids.creative-toddler',compact('data')); 
    }

    public function getTheLittleProjectData(Request $request)
    {
        $data = User::join('user_subscribed_plans',function($join){
            $join->on('users.id','=','user_subscribed_plans.user_id')
            ->where('type','THE_LITTLE_PROJECT');
        })->select('users.id','users.name','users.email','users.mobile')->get();
        // dd($data[0]->getUserDetails);
        return view('admin.kids.the-little-project',compact('data')); 
    }
    public function getTheColorWorlData(Request $request)
    {
        $data = User::join('user_subscribed_plans',function($join){
            $join->on('users.id','=','user_subscribed_plans.user_id')
            ->where('type','THE_COLOR_WOLRD');
        })->select('users.id','users.name','users.email','users.mobile')->get();
        // dd($data[0]->getUserDetails);
        return view('admin.kids.the-color-world',compact('data')); 
    }
    public function getKidsArtLabs(Request $request)
    {
        $data = User::join('user_subscribed_plans',function($join){
            $join->on('users.id','=','user_subscribed_plans.user_id')
            ->where('type','KIDS_ART');
        })->select('users.id','users.name','users.email','users.mobile')->get();
        // dd($data[0]->getUserDetails);
        return view('admin.kids.kids-art-lab',compact('data')); 
    }
    public function getToddllerArtLab(Request $request)
    {
        $data = User::join('user_subscribed_plans',function($join){
            $join->on('users.id','=','user_subscribed_plans.user_id')
            ->where('type','TODDLER_ART');
        })->select('users.id','users.name','users.email','users.mobile')->get();
        // dd($data[0]->getUserDetails);
        return view('admin.kids.toddller-art-lab',compact('data')); 
    }
    public function getYoungArtistClubData(Request $request)
    {
        $data = User::join('user_subscribed_plans',function($join){
            $join->on('users.id','=','user_subscribed_plans.user_id')
            ->where('type','YOUNG_ARTIST_CLUB');
        })->select('users.id','users.name','users.email','users.mobile')->get();
        // dd($data[0]->getUserDetails);
        return view('admin.kids.young-artist-club',compact('data')); 
    }
    // public function getPrivateArtPrivate(Request $request)
    // {
    //     $data = User::join('user_subscribed_plans',function($join){
    //         $join->on('users.id','=','user_subscribed_plans.user_id')
    //         ->where('type','YOUNG_ARTIST_CLUB');
    //     })->select('users.id','users.name','users.email','users.mobile')->get();
    //     // dd($data[0]->getUserDetails);
    //     return view('admin.kids.young-artist-club',compact('data')); 
    // }
    
    
    public function getPaidUsers(Request $request)
    {
        // $data = ::get();

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
