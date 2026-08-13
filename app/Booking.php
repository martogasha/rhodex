<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','phone_number','date_from','date_to','number_of_guest','number_of_room','price','status','status_one','destination','email'
    ];
}
