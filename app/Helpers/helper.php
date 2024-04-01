<?php

use App\Models\SlotBooking;
use App\Models\ClassList;
use App\Models\KidsClass;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

    function getWeekDays(){
        $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        return $daysOfWeek;
    }

    function getMonthName($month){
        $month = (int) $month;
       
        $months = match($month){
            1 =>'January',
            2 => 'February',
            3 => 'March',
            4 =>'April',
            5 =>'May',
            6 =>'June',
            7 =>'July',
            8 =>'August',
            9 =>'September',
            10 =>'October',
            11 =>'November',
            12 =>'December',
            default => ''
        };
        return $months;
    };
    function getMonthAndYearFromDate($date=''){

        if(empty($date)){
            $date = Carbon::now();
        }
      return   
      [
        'month' => $date->month ?? "",'year'=>$date->year ?? ""
     ];
    }
    function getDayOfWeek($date){
       
        $firstDayOfMonth = Carbon::createFromDate($date->year, $date->month, 1);
        $dayOfWeek = $firstDayOfMonth->dayOfWeek;
        return $dayOfWeek;
    }
    function getNoOfDayInSelectedMonth($date){
        return $date->daysInMonth;
    }

    function isBookingAvailable($month,$year,$day){
        $date = Carbon::createFromDate($year, $month, $day);
        $today = Carbon::now();

        if($date->gte($today)){
            return true;
        }
        return false;
        
    }
    function getDateFromYearMonthAndDay($year,$month,$day){
        return Carbon::createFromDate($year,$month,$day)->format('Y-m-d');
    }
    function formatDate($date,$type='d/m/Y'){
        
    }
    function getTimeSlots(){
        return TimeSlot::get();
    }
    function getBookedTimeSlots($date){
        $finalData = [];
        $bookedSlots = SlotBooking::where('slot_date',$date)->select('slot_time')->get();
        if(count($bookedSlots)>0){
            $finalData = array_column($bookedSlots->toArray(),'slot_time');
        }
        return $finalData;
    }

    function getClasses(){
        $classes = ClassList::get();
        return $classes;
    }

    function getOrderType($key){
        return match($key) {
            'KIDS' =>'KIDS_ART',
            'TODDLER' => 'TODDLER_ART',
            default => ''
        };
    }

    function getPaymentSuccessMessage($type){
        return match($type){
            'KIDS_ART_SUBSCRIPTION'  =>'Payment Successfully!',
            'TODDLER_ART_SUBSCRIPTION' => 'Payment Successfully!',
            'KIDS_CLASS_REGISTER'=>'Payment Successfully!',
            default => '',
        };
    }

    function getImagePath($path='',$type=''){
        if(empty($path) || empty($type)){
            return "";
        }
        switch($type){
            case 'EVENT_CALENDER':
                $imagePath = "/assets/img/event-calender/".$path;
                if(Storage::disk('public')->exists($imagePath)){
                    return "/storage/".$imagePath;
                }
                break;

            default: 
             return "";
        }
    }

    function getDayName($year,$month,$day){
        return  substr(Carbon::createFromDate($year,$month,$day)->format('D'),0,3);
    }
?>