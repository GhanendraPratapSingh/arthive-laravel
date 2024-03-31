<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCalenderCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_calender_id',
        'event_name',
        'event_details',
        'redirect_url'
    ];
}
