<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRegistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'payment_id',
        'class_name',
    ];

    public function getUserDetails(){
        return $this->belongsTo(User::class);
    }
}
