<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table ="product";

    protected $attributes = [
        'price'=> 10.50,
        'amount'=> 1000
    ];

    protected $fillable = [
        'productname',
        'price',
        'amount',
        'discription'
    ];

    protected $hidden = [
    ];
}
