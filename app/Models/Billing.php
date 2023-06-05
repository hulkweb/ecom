<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected  $fillable=[
        'name',
        'phone',
        'phone2',
        'email',
        'address',
        'city',
        'pincode',
        'date_of_delivery',
        'time_of_delivery',
        'user_id',
        
    ];
}
