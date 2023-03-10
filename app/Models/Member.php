<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone_number',
        'street',
        'city',
        'state',
        'zip_code',
        'date_of_birth',
        'date_of_joining',
        'date_of_confirmation',
        
    ];

   

   
}
