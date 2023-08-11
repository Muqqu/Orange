<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlots extends Model
{
    use HasFactory;
    protected $table = 'timeslots';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'date',
        'time',
        'booked'
      
    ];
}
