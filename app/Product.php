<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name','product_image','product_price','product_image1','product_image2','product_image3','product_category','product_category1','product_category2','product_category3','category_id',
    ];
     public function category(){
       return $this->belongsTo(Category::class);
    }
}
