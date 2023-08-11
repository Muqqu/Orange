<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{
    use HasFactory;
    protected $table = 'ideas';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'message',
        'motive',
        'email',
        'contact_no'
      
    ];
}
