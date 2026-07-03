<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesa extends Model
{
    protected $fillable = [
        'amount','status','date','phone','reference'
    ];
}
