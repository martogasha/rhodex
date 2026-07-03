<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
            'title','detail','link','linkName','detailOne','linkNameOne','linkOne','quote','quoteAuthor','detailTwo','linkNameTwo','linkTwo','detailThree','image'
    ];
}
