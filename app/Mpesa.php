<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mpesa extends Model
{
    protected $fillable = [
        'amount','status','system','user_id','date','phone','reference'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
