<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'appointment_date',
        'appointment_time',
        'appointment_discuss'

    ];
}
