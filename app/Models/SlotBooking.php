<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotBooking extends Model
{
    use HasFactory;
    protected $fillable =['id','user_id','payment_id','slot_date','slot_time','quantity','booking_type'];

    public function getUserDetails(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function getPaymentDetails(){
        return $this->belongsTo(Payment::class,'payment_id','id');
    }
}
