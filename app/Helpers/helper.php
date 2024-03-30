<?php

use App\Models\BookedTimeSlot;
use App\Models\ClassList;
use App\Models\KidsClass;
use App\Models\TimeSlot;
use Carbon\Carbon;

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
        $bookedSlots = BookedTimeSlot::where('date',$date)->select('timeslot')->get();
        if(count($bookedSlots)>0){
            $finalData = array_column($bookedSlots->toArray(),'timeslot');
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
?>