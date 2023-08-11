<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'business';
    public $timestamps = false;
    protected $fillable = [
        'businessName',
        'email',
        'ownerName',
        'password'
      
    ];
}
