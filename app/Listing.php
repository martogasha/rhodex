<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
     protected $fillable = [
        'name','blog_id','image','nameOne','link'
    ];
}
