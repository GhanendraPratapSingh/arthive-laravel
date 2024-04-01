<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotBooking extends Model
{
    use HasFactory;
    protected $fillable =['id','user_id','payment_id','slot_date','slot_time','quantity','booking_type'];
}
