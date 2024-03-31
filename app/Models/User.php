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
        return $this->hasMany(ArtWorkSubscription::class);
    }

    public function getSlotBookedUser(){
        return $this->hasMany(Booking::class);
    }
    
}
