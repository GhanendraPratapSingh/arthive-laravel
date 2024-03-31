<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCalender extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'event_img',
        'event_date',
        'status'
    ];

    public function getEventCategories(){
        return $this->hasMany(EventCalenderCategory::class);
    }

}
