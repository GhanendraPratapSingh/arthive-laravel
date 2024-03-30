<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'order_id',
        'razorpay_payment_id',
        'razorpay_order_id',
        'payment_amount',
        'payment_mode',
        'order_type',
        'payment_status'
    ];
}
