<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'user_type'
    ];

    public function getClassRegistredUser(){
        return $this->hasMany(ClassRegistration::class);
    }

    public function getArtWorkSubscribedUser(){
        return $this->hasMany(UserSubscribedPlan::class);
    }

    public function getSlotBookedUser(){
        return $this->hasMany(SlotBooking::class);
    }

    public function getPaymentDetails(){
        return $this->hasMany(Payment::class);
    }

    public function getSinglePaymentDetails(){
        return $this->hasOne(Payment::class);
    }

    public function getSlotBookingDetails(){
        return $this->hasMany(SlotBooking::class);
    }

    public function getSubscriptionDetails(){
       return  $this->hasOne(UserSubscribedPlan::class);
    }
 
    
}
